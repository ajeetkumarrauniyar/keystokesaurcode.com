// Mobile menu
document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener("click", function () {
      mobileMenu.classList.toggle("hidden");
      const isExpanded =
        mobileMenuButton.getAttribute("aria-expanded") === "true";
      mobileMenuButton.setAttribute("aria-expanded", !isExpanded);
    });
  }
});

// Newsletter form submission
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("newsletter-form");
  const modal = document.getElementById("success-modal");
  const modalContent = document.getElementById("modal-content");
  const modalOverlay = document.getElementById("modal-overlay");
  const closeModalBtn = document.getElementById("close-modal");
  const confirmModalBtn = document.getElementById("confirm-modal");
  const subscribeBtn = document.getElementById("subscribe-btn");

  // Check if elements exist to prevent errors
  if (!form) {
    console.error("Newsletter form not found");
    return;
  }

  if (
    !modal ||
    !modalContent ||
    !modalOverlay ||
    !closeModalBtn ||
    !confirmModalBtn ||
    !subscribeBtn
  ) {
    console.error("One or more modal elements not found");
    return;
  }

  // Last focused element before modal opens (for returning focus)
  let lastFocusedElement;

  // Open modal function
  function openModal() {
    // Store the last focused element
    lastFocusedElement = document.activeElement;

    // Show modal
    modal.classList.remove("hidden");

    // Animate modal in
    setTimeout(() => {
      modalContent.classList.remove("scale-95", "opacity-0");
      modalContent.classList.add("scale-100", "opacity-100");
    }, 10);

    // Set modal attributes
    modalContent.setAttribute("aria-modal", "true");
    modalContent.setAttribute("role", "dialog");
    modal.setAttribute("aria-hidden", "false");

    // Prevent body scrolling
    document.body.style.overflow = "hidden";

    // Focus the first focusable element in the modal
    confirmModalBtn.focus();

    // Set up focus trap
    setupFocusTrap();
  }

  // Close modal function
  function closeModal() {
    // Animate modal out
    modalContent.classList.add("scale-95", "opacity-0");
    modalContent.classList.remove("scale-100", "opacity-100");

    // Hide modal after animation
    setTimeout(() => {
      modal.classList.add("hidden");

      // Update attributes
      modal.setAttribute("aria-hidden", "true");
      modalContent.removeAttribute("aria-modal");

      // Restore body scrolling
      document.body.style.overflow = "";

      // Return focus to the element that opened the modal
      if (lastFocusedElement) {
        lastFocusedElement.focus();
      }
    }, 300);
  }

  // Focus trap for modal
  function setupFocusTrap() {
    const focusableElements = modalContent.querySelectorAll(
      'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
    );
    const firstElement = focusableElements[0];
    const lastElement = focusableElements[focusableElements.length - 1];

    modalContent.addEventListener("keydown", function (e) {
      if (e.key === "Tab") {
        // Shift + Tab
        if (e.shiftKey) {
          if (document.activeElement === firstElement) {
            e.preventDefault();
            lastElement.focus();
          }
        }
        // Tab
        else {
          if (document.activeElement === lastElement) {
            e.preventDefault();
            firstElement.focus();
          }
        }
      }
    });
  }

  // Form submission (AJAX)
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    // Remove previous error
    let errorDiv = form.querySelector(".newsletter-error");
    if (errorDiv) errorDiv.remove();

    subscribeBtn.disabled = true;
    subscribeBtn.textContent = "Subscribing...";

    const formData = new FormData(form);

    // Get the form's action URL - IMPORTANT: we ensure this is properly set
    let actionUrl = form.getAttribute("action");

    // Ensure we have a valid URL
    if (!actionUrl || actionUrl === "") {
      console.error("Form action URL is missing!");
      actionUrl = window.ajax_object
        ? window.ajax_object.ajax_url
        : "/wp-admin/admin-post.php";
    }

    // Make the AJAX request
    fetch(actionUrl, {
      method: "POST",
      body: formData,
      credentials: "same-origin",
      headers: {
        "X-Requested-With": "XMLHttpRequest",
      },
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        }

        // Check if the response is JSON
        const contentType = response.headers.get("content-type");
        if (contentType && contentType.includes("application/json")) {
          return response.json();
        } else {
          // Handle HTML/text response (WordPress might redirect)
          return response.text().then((text) => {
            // If response is OK but not JSON, assume success
            if (response.ok) {
              return { success: true };
            }
            throw new Error("Invalid response format");
          });
        }
      })
      .then((data) => {
        subscribeBtn.disabled = false;
        subscribeBtn.textContent = "Subscribe Now";

        if (data.success) {
          openModal();
          form.reset();
        } else {
          showError(
            data.message ||
              "There was a problem with your subscription. Please try again."
          );
        }
      })
      .catch((error) => {
        console.error("Fetch error:", error);
        subscribeBtn.disabled = false;
        subscribeBtn.textContent = "Subscribe Now";
        showError(
          "There was a problem with your submission. Please try again."
        );
      });
  });

  function showError(message) {
    let errorDiv = document.createElement("div");
    errorDiv.className =
      "newsletter-error bg-red-900/50 text-red-300 p-4 rounded-md mb-6";
    errorDiv.textContent = message;
    form.insertBefore(errorDiv, form.firstChild);
  }

  // Close modal when clicking the close button
  closeModalBtn.addEventListener("click", closeModal);

  // Close modal when clicking the confirm button
  confirmModalBtn.addEventListener("click", closeModal);

  // Close modal when clicking the overlay
  modalOverlay.addEventListener("click", closeModal);

  // Close modal when pressing ESC key
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && !modal.classList.contains("hidden")) {
      closeModal();
    }
  });

  // Add manual test functions to window for debugging
  window.testModal = {
    open: openModal,
    close: closeModal,
  };
});
