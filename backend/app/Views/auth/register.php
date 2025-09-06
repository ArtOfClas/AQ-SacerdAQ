<!-- Registration Page -->
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-purple-900 to-blue-900 py-16">
    <div class="max-w-md mx-auto px-4">
        <!-- Display Messages -->
        <?php if (session()->getFlashdata('message')): ?>
        <div class="alert-message bg-green-600 text-white p-4 rounded-lg mb-6">
            <?= session()->getFlashdata('message') ?>
        </div>
        <?php endif; ?>

        <?php if (isset($error)): ?>
        <div class="alert-message bg-red-600 text-white p-4 rounded-lg mb-6">
            <?= esc($error) ?>
        </div>
        <?php endif; ?>

        <!-- Registration Form -->
        <div class="bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-2xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0-20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-white mb-2">Create Your Hero!</h1>
                <p class="text-gray-300">Join the adventure - it's free!</p>
            </div>

            <!-- Form -->
            <form action="/register" method="POST" class="space-y-6">
                <?= csrf_field() ?>
                
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Username
                    </label>
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                        <input
                            type="text"
                            name="username"
                            value="<?= old('username') ?>"
                            required
                            minlength="3"
                            maxlength="32"
                            pattern="[a-zA-Z0-9_]+"
                            class="w-full pl-10 pr-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                            placeholder="Choose your hero name"
                        />
                    </div>
                    <?php if (isset($validation) && $validation->hasError('username')): ?>
                    <p class="text-red-400 text-sm mt-1"><?= $validation->getError('username') ?></p>
                    <?php endif; ?>
                    <p class="text-gray-400 text-xs mt-1">3-32 characters, letters, numbers, and underscores only</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Email Address
                    </label>
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        <input
                            type="email"
                            name="email"
                            value="<?= old('email') ?>"
                            required
                            class="w-full pl-10 pr-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                            placeholder="Enter your email"
                        />
                    </div>
                    <?php if (isset($validation) && $validation->hasError('email')): ?>
                    <p class="text-red-400 text-sm mt-1"><?= $validation->getError('email') ?></p>
                    <?php endif; ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                        </svg>
                        <input
                            type="password"
                            name="password"
                            required
                            minlength="6"
                            class="w-full pl-10 pr-12 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                            placeholder="Create password"
                            id="password"
                        />
                        <button
                            type="button"
                            onclick="togglePassword('password')"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-300"
                        >
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" id="eye-icon">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                    <?php if (isset($validation) && $validation->hasError('password')): ?>
                    <p class="text-red-400 text-sm mt-1"><?= $validation->getError('password') ?></p>
                    <?php endif; ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Confirm Password
                    </label>
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                        </svg>
                        <input
                            type="password"
                            name="confirm_password"
                            required
                            class="w-full pl-10 pr-12 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                            placeholder="Confirm password"
                            id="confirm_password"
                        />
                        <button
                            type="button"
                            onclick="togglePassword('confirm_password')"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-300"
                        >
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" id="eye-icon-2">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                    <?php if (isset($validation) && $validation->hasError('confirm_password')): ?>
                    <p class="text-red-400 text-sm mt-1"><?= $validation->getError('confirm_password') ?></p>
                    <?php endif; ?>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Age
                        </label>
                        <div class="relative">
                            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            <input
                                type="number"
                                name="age"
                                value="<?= old('age') ?>"
                                required
                                min="13"
                                max="99"
                                class="w-full pl-10 pr-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                                placeholder="Age"
                            />
                        </div>
                        <?php if (isset($validation) && $validation->hasError('age')): ?>
                        <p class="text-red-400 text-sm mt-1"><?= $validation->getError('age') ?></p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Gender
                        </label>
                        <select
                            name="gender"
                            required
                            class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                        >
                            <option value="">Select</option>
                            <option value="M" <?= old('gender') === 'M' ? 'selected' : '' ?>>Male</option>
                            <option value="F" <?= old('gender') === 'F' ? 'selected' : '' ?>>Female</option>
                        </select>
                        <?php if (isset($validation) && $validation->hasError('gender')): ?>
                        <p class="text-red-400 text-sm mt-1"><?= $validation->getError('gender') ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Country
                    </label>
                    <select
                        name="country"
                        required
                        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500"
                    >
                        <option value="">Select Country</option>
                        <option value="US" <?= old('country') === 'US' ? 'selected' : '' ?>>United States</option>
                        <option value="CA" <?= old('country') === 'CA' ? 'selected' : '' ?>>Canada</option>
                        <option value="GB" <?= old('country') === 'GB' ? 'selected' : '' ?>>United Kingdom</option>
                        <option value="AU" <?= old('country') === 'AU' ? 'selected' : '' ?>>Australia</option>
                        <option value="DE" <?= old('country') === 'DE' ? 'selected' : '' ?>>Germany</option>
                        <option value="FR" <?= old('country') === 'FR' ? 'selected' : '' ?>>France</option>
                        <option value="JP" <?= old('country') === 'JP' ? 'selected' : '' ?>>Japan</option>
                        <option value="BR" <?= old('country') === 'BR' ? 'selected' : '' ?>>Brazil</option>
                        <option value="MX" <?= old('country') === 'MX' ? 'selected' : '' ?>>Mexico</option>
                        <option value="IN" <?= old('country') === 'IN' ? 'selected' : '' ?>>India</option>
                        <option value="XX" <?= old('country') === 'XX' ? 'selected' : '' ?>>Other</option>
                    </select>
                    <?php if (isset($validation) && $validation->hasError('country')): ?>
                    <p class="text-red-400 text-sm mt-1"><?= $validation->getError('country') ?></p>
                    <?php endif; ?>
                </div>

                <div class="flex items-start">
                    <input
                        type="checkbox"
                        required
                        class="w-4 h-4 text-green-600 bg-gray-700 border-gray-600 rounded focus:ring-green-500 mt-1"
                    />
                    <span class="ml-2 text-sm text-gray-300">
                        I agree to the <a href="/terms" class="text-green-400 hover:text-green-300">Terms of Service</a> and <a href="/privacy" class="text-green-400 hover:text-green-300">Privacy Policy</a>
                    </span>
                </div>

                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-green-600 to-blue-600 hover:from-green-700 hover:to-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 transform hover:scale-105"
                >
                    Create My Hero!
                </button>
            </form>

            <!-- Divider -->
            <div class="my-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-gray-800 text-gray-400">Already have an account?</span>
                    </div>
                </div>
            </div>

            <!-- Sign In Link -->
            <div class="text-center">
                <a 
                    href="/login" 
                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-blue-400 bg-gray-700 hover:bg-gray-600 transition-colors"
                >
                    Sign In Instead
                </a>
            </div>
        </div>

        <!-- Benefits -->
        <div class="mt-8">
            <div class="bg-green-900/50 rounded-lg p-4">
                <h3 class="text-white font-semibold mb-2">Join the Adventure!</h3>
                <ul class="text-green-200 text-sm space-y-1">
                    <li>• Completely free to play</li>
                    <li>• No downloads required</li>
                    <li>• Weekly updates and events</li>
                    <li>• Join thousands of players worldwide</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const eyeIcon = document.getElementById(inputId === 'password' ? 'eye-icon' : 'eye-icon-2');
    
    if (input.type === 'password') {
        input.type = 'text';
        eyeIcon.innerHTML = '<path d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L8.464 8.464M14.12 14.12l1.415 1.415M14.12 14.12L15.535 15.535M8.464 8.464L5.636 5.636m2.828 2.828L5.636 5.636" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>';
    } else {
        input.type = 'password';
        eyeIcon.innerHTML = '<path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>';
    }
}
</script>