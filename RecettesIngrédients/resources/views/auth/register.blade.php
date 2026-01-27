<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - RecipeHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
    * { font-family: 'Poppins', sans-serif; }

    body {
        /* Background gradient like homepage hero */
        background: linear-gradient(135deg, #ecfdf5 0%, #008000 100%);
        min-height: 100vh;
    }

    /* Glassmorphism card */
    .glass {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Input focus styles with Tailwind utility */
    .input-focus:focus {
        @apply outline-none ring-2 ring-green-500 border-transparent;
    }

    /* Primary buttons using homepage green palette */
    .btn-primary {
        @apply bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-bold py-3 px-4 rounded-lg transition-all duration-200 transform hover:scale-105;
    }

    /* Fade-in animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-out;
    }
</style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center p-4 py-8">
        <div class="w-full max-w-md animate-fade-in">
            <!-- Logo & Title -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-full mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17c0 5.523 4.477 10 10 10s10-4.477 10-10c0-6.002-4.5-10.747-10-10.747z"></path>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-white mb-2">RecipeHub</h1>
                <p class="text-orange-100">Join our community of food lovers</p>
            </div>

            <!-- Register Form -->
            <div class="glass rounded-2xl shadow-2xl p-8 mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Create Account</h2>

                <!-- Form -->
                <form class="space-y-4">
                    <!-- Full Name -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                        <div class="relative">
                            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <input 
                                type="text" 
                                placeholder="John Doe" 
                                class="input-focus w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-900 placeholder-gray-500 transition-all"
                            >
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <div class="relative">
                            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <input 
                                type="email" 
                                placeholder="Enter your email" 
                                class="input-focus w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-900 placeholder-gray-500 transition-all"
                            >
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                            <input 
                                type="password" 
                                placeholder="Create a strong password" 
                                class="input-focus w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-900 placeholder-gray-500 transition-all"
                                id="password"
                            >
                        </div>
                        <!-- Password Strength Indicator -->
                        <div class="mt-2 flex items-center space-x-2">
                            <div class="flex-1 h-1 bg-gray-300 rounded-full overflow-hidden">
                                <div class="password-strength w-1/3 bg-yellow-500" id="strengthBar"></div>
                            </div>
                            <span class="text-xs text-gray-500 font-medium" id="strengthText">Weak</span>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Confirm Password</label>
                        <div class="relative">
                            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <input 
                                type="password" 
                                placeholder="Confirm your password" 
                                class="input-focus w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-900 placeholder-gray-500 transition-all"
                            >
                        </div>
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="flex items-start pt-2">
                        <input type="checkbox" class="w-4 h-4 text-orange-500 rounded cursor-pointer mt-1">
                        <label class="ml-2 text-sm text-gray-600">
                            I agree to the 
                            <a href="#" class="text-orange-500 font-semibold hover:text-orange-600">Terms of Service</a> 
                            and 
                            <a href="#" class="text-orange-500 font-semibold hover:text-orange-600">Privacy Policy</a>
                        </label>
                    </div>

                    <!-- Sign Up Button -->
                    <button type="submit" class="btn-primary w-full">
                        Create Account
                    </button>
                </form>

                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Or sign up with</span>
                    </div>
                </div>

                <!-- Social Signup -->
                <div class="grid grid-cols-2 gap-3">
                    <button type="button" class="flex items-center justify-center py-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition-all">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                        <span class="ml-2 text-sm font-medium text-gray-600">Google</span>
                    </button>
                    <button type="button" class="flex items-center justify-center py-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition-all">
                        <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        <span class="ml-2 text-sm font-medium text-gray-600">Facebook</span>
                    </button>
                </div>
            </div>

            <!-- Sign In Link -->
            <div class="text-center">
                <p class="text-white">
                    Already have an account? 
                    <a href="login" class="font-bold text-orange-200 hover:text-white transition-all">Sign in here</a>
                </p>
            </div>

            <!-- Footer Links -->
            <div class="mt-8 text-center text-sm text-orange-100 space-y-1">
                <p>© 2024 RecipeHub. All rights reserved.</p>
                <div class="space-x-4">
                    <a href="#" class="hover:text-white transition-all">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-all">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Password Strength Checker -->
    <script>
        const passwordInput = document.getElementById('password');
        const strengthBar = document.getElementById('strengthBar');
        const strengthText = document.getElementById('strengthText');

        if (passwordInput) {
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                let text = 'Weak';
                let color = 'bg-red-500';

                if (password.length >= 8) strength++;
                if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
                if (password.match(/[0-9]/)) strength++;
                if (password.match(/[^a-zA-Z0-9]/)) strength++;

                // Update UI based on strength
                if (strength === 0) {
                    text = 'Very Weak';
                    color = 'bg-red-500';
                    strengthBar.style.width = '10%';
                } else if (strength === 1) {
                    text = 'Weak';
                    color = 'bg-orange-500';
                    strengthBar.style.width = '33%';
                } else if (strength === 2) {
                    text = 'Fair';
                    color = 'bg-yellow-500';
                    strengthBar.style.width = '66%';
                } else if (strength === 3) {
                    text = 'Good';
                    color = 'bg-green-500';
                    strengthBar.style.width = '100%';
                } else {
                    text = 'Strong';
                    color = 'bg-green-600';
                    strengthBar.style.width = '100%';
                }

                strengthBar.className = `password-strength w-full ${color}`;
                strengthText.textContent = text;
            });
        }
    </script>
</body>
</html>