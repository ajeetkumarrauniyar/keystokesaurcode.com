<?php

/**
 * Template part for displaying the newsletter section
 *
 * @package Astra-Child
 */

// Check for form submission response
$newsletter_success = isset($_GET['newsletter']) && $_GET['newsletter'] === 'success';
$newsletter_error = isset($_GET['newsletter']) && $_GET['newsletter'] === 'error';
?>
<section id="newsletter" class="py-20 bg-neutral-800">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2">
                <div class="relative rounded-lg overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8MXx8bmV3c2xldHRlciUyNTIwc2lnbnVwJTI1MjBkYXJrJTI1MjBtb2RlJTI1MjBuZW9ufGVufDB8MHx8fDE3NDcyMzY2NzZ8MA&ixlib=rb-4.1.0&q=80&w=1080"
                        alt="Person working on laptop"
                        class="w-full h-full object-cover rounded-lg" />
                    <div
                        class="absolute inset-0 bg-gradient-to-tr from-neutral-900/70 to-transparent"></div>
                </div>
            </div>

            <div class="lg:w-1/2">
                <div class="text-center lg:text-left">
                    <h2
                        class="text-3xl md:text-4xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-500">
                        Subscribe
                    </h2>
                    <p class="text-neutral-300 mb-8 max-w-lg mx-auto lg:mx-0">
                        Get weekly coding tutorials, tech news, and exclusive
                        resources delivered straight to your inbox.
                    </p>

                    <?php if ($newsletter_success): ?>
                        <div class="bg-green-900/50 text-green-300 p-4 rounded-md mb-6">
                            Thank you for subscribing! Please check your email to confirm your subscription.
                        </div>
                    <?php endif; ?>

                    <?php if ($newsletter_error): ?>
                        <div class="bg-red-900/50 text-red-300 p-4 rounded-md mb-6">
                            There was a problem with your submission. Please try again.
                        </div>
                    <?php endif; ?>

                    <form
                        id="newsletter-form"
                        class="space-y-4 max-w-lg mx-auto lg:mx-0"
                        method="post"
                        action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                        <input type="hidden" name="action" value="subscribe_newsletter">
                        <?php wp_nonce_field('subscribe_newsletter', 'newsletter_nonce'); ?>

                        <div>
                            <label for="name" class="sr-only">Your Name</label>
                            <input
                                type="text"
                                id="name"
                                name="subscriber_name"
                                placeholder="Your Name"
                                class="w-full px-4 py-3 bg-neutral-900 border border-neutral-700 rounded-md text-white placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all duration-300"
                                required />
                        </div>

                        <div>
                            <label for="email" class="sr-only">Your Email</label>
                            <input
                                type="email"
                                id="email"
                                name="subscriber_email"
                                placeholder="Your Email Address"
                                class="w-full px-4 py-3 bg-neutral-900 border border-neutral-700 rounded-md text-white placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all duration-300"
                                required />
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input
                                    id="terms"
                                    type="checkbox"
                                    name="subscriber_terms"
                                    class="w-4 h-4 bg-neutral-900 border border-neutral-700 rounded focus:ring-cyan-400 focus:ring-2"
                                    required />
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="text-neutral-400">I agree to receive emails and accept the
                                    <a
                                        href="#"
                                        class="text-cyan-400 hover:text-cyan-300 transition-colors duration-300">Privacy Policy</a></label>
                            </div>
                        </div>

                        <button
                            type="submit"
                            id="subscribe-btn"
                            class="w-full px-6 py-3 bg-gradient-to-r from-cyan-400 to-teal-500 text-neutral-900 font-bold rounded-md transform transition-all duration-300 hover:scale-105 hover:shadow-[0_0_15px_rgba(6,182,212,0.5)]">
                            Subscribe Now
                        </button>
                    </form>

                    <div class="mt-6 text-center lg:text-left">
                        <p class="text-neutral-400 text-sm">
                            Join over
                            <span class="text-white font-bold">25,000</span>
                            developers already learning with us
                        </p>
                    </div>

                    <div
                        class="mt-8 flex flex-wrap justify-center lg:justify-start gap-4">
                        <div
                            class="flex items-center bg-neutral-900 px-4 py-2 rounded-full">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-yellow-400 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <span class="text-white">Weekly Updates</span>
                        </div>
                        <div
                            class="flex items-center bg-neutral-900 px-4 py-2 rounded-full">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-green-400 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-white">Exclusive Content</span>
                        </div>
                        <div
                            class="flex items-center bg-neutral-900 px-4 py-2 rounded-full">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-red-400 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span class="text-white">Unsubscribe Anytime</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div
    id="success-modal"
    class="fixed inset-0 flex items-center justify-center z-50">
    <div
        class="absolute inset-0 bg-neutral-900/80"
        id="modal-overlay"></div>
    <div
        class="relative bg-neutral-800 p-8 rounded-lg max-w-md w-full mx-4 transform transition-all duration-300 scale-95 opacity-0"
        id="modal-content">
        <button
            id="close-modal"
            class="absolute top-4 right-4 text-neutral-400 hover:text-white transition-colors duration-300">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="text-center">
            <div
                class="w-16 h-16 bg-gradient-to-r from-cyan-400 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-8 w-8 text-neutral-900"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 13l4 4L19 7" />
                </svg>
            </div>

            <h3 class="text-2xl font-bold mb-2 text-white">
                Subscription Successful!
            </h3>
            <p class="text-neutral-300 mb-6">
                Thank you for subscribing to our newsletter. Check your
                email for a confirmation.
            </p>

            <button
                id="confirm-modal"
                class="px-6 py-2 bg-gradient-to-r from-cyan-400 to-teal-500 text-neutral-900 font-bold rounded-md transform transition-all duration-300 hover:scale-105">
                Got it
            </button>
        </div>
    </div>
</div>