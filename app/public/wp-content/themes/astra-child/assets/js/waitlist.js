jQuery(document).ready(function($) {
    const form = $('#waitlist-form');
    const modal = $('#success-modal');
    const modalContent = $('#modal-content');
    const modalOverlay = $('#modal-overlay');
    const closeModalBtn = $('#close-modal');

    function showError(message) {
        $('.form-error').remove();
        const errorDiv = $('<div class="form-error text-red-500 text-sm mt-2"></div>').text(message);
        form.find('button[type="submit"]').before(errorDiv);
    }

    function openModal() {
        modal.removeClass('hidden');
        setTimeout(() => {
            modalContent
                .removeClass('scale-95 opacity-0')
                .addClass('scale-100 opacity-100');
        }, 10);
        $('body').css('overflow', 'hidden');
    }

    function closeModal() {
        modalContent
            .removeClass('scale-100 opacity-100')
            .addClass('scale-95 opacity-0');
        setTimeout(() => {
            modal.addClass('hidden');
            $('body').css('overflow', '');
        }, 300);
    }

    form.on('submit', function(e) {
        e.preventDefault();
        
        // Remove existing errors
        $('.form-error').remove();
        
        // Get form data
        const formData = new FormData(this);
        
        // Basic validation
        const requiredFields = {
            'first-name': 'First Name',
            'last-name': 'Last Name',
            'email': 'Email',
            'occupation': 'Occupation'
        };
        
        let isValid = true;
        
        for (const [fieldName, fieldLabel] of Object.entries(requiredFields)) {
            if (!formData.get(fieldName)?.trim()) {
                showError(`${fieldLabel} is required`);
                isValid = false;
            }
        }

        if (!$('#terms').is(':checked')) {
            showError('Please accept the terms and conditions');
            isValid = false;
        }

        if (!isValid) return;

        // Disable submit button and show loading state
        const submitBtn = form.find('button[type="submit"]');
        submitBtn.prop('disabled', true).html('Submitting...');
        
        // Submit form
        $.ajax({
            url: waitlistAjax.ajaxurl,
            type: 'POST',
            data: {
                action: 'submit_waitlist',
                nonce: waitlistAjax.nonce,
                'first-name': formData.get('first-name'),
                'last-name': formData.get('last-name'),
                email: formData.get('email'),
                occupation: formData.get('occupation'),
                interests: formData.getAll('interests[]'),
                message: formData.get('message'),
                terms: formData.get('terms')
            },
            success: function(response) {
                if(response.success) {
                    openModal();
                    form[0].reset();
                } else {
                    showError(response.data.message || 'An error occurred. Please try again.');
                }
            },
            error: function() {
                showError('There was an error submitting your form. Please try again.');
            },
            complete: function() {
                submitBtn.prop('disabled', false).html('Join the Waitlist');
            }
        });
    });

    closeModalBtn.on('click', closeModal);
    modalOverlay.on('click', closeModal);

    $(document).on('keydown', function(e) {
        if (e.key === 'Escape' && !modal.hasClass('hidden')) {
            closeModal();
        }
    });
});
