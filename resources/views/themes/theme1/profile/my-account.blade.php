@extends('themes.theme1.layouts.app')

@section('customcss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@20.2.0/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('content')
<!-- cover -->
<section class="user-cover">
    <div class="pixel-container">
        <div class="wrap">
            <div class="cover-contents">
                <!-- breadcrumbs container-->
                <div class="pixel-container">
                    <!-- row -->
                    <div class="wrap">
                        <!-- content -->

                        <ul class="breadcrumbs">
                            <li>
                                <a href="{{ route('index') }}">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span>My Account</span>
                                </a>
                            </li>

                        </ul>
                        <!-- ./content -->
                    </div>
                    <!-- ./row -->
                </div>
                <!-- ./breadcrumbs container-->
            </div>
        </div>
    </div>
</section>
<!-- ./cover -->

<!-- user-layout -->
<section class="user-page-layout">
    <div class="pixel-container">
        <div class="wrap">
            <div class="user-layout">
                <aside>
                    <div class="user-sidebar">
                        <ul>
                            <li>
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview" style="background-image: url('../../images/avatar_male.webp');">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="notification.php">
                                    <i>
                                        <!-- Generated by IcoMoon.io -->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                            <title>bell-ring</title>
                                            <path d="M2.667 13.333v-4c0-2.592 0.748-5.107 2.161-7.271 0.404-0.616 0.231-1.443-0.387-1.845-0.616-0.401-1.443-0.228-1.845 0.388-1.699 2.599-2.596 5.617-2.596 8.728v4c0 0.736 0.596 1.333 1.333 1.333s1.333-0.596 1.333-1.333zM25.333 15.647v-6.313c0-5.147-4.188-9.333-9.333-9.333s-9.333 4.187-9.333 9.333v6.312l-5.157 9.027c-0.236 0.413-0.235 0.92 0.004 1.331 0.239 0.412 0.679 0.664 1.153 0.664h8c0 2.941 2.392 5.333 5.333 5.333s5.333-2.392 5.333-5.333h8c0.475 0 0.915-0.252 1.153-0.664 0.239-0.411 0.24-0.917 0.004-1.331zM16 29.333c-1.471 0-2.667-1.196-2.667-2.667h5.333c0 1.472-1.196 2.667-2.667 2.667zM4.965 24l4.193-7.339c0.113-0.2 0.175-0.429 0.175-0.661v-6.667c0-3.676 2.991-6.667 6.667-6.667s6.667 2.991 6.667 6.667v6.667c0 0.232 0.061 0.46 0.176 0.661l4.192 7.339zM29.403 0.603c-0.403-0.616-1.232-0.789-1.845-0.387-0.617 0.403-0.791 1.229-0.387 1.845 1.415 2.165 2.163 4.68 2.163 7.272v4c0 0.736 0.596 1.333 1.333 1.333s1.333-0.597 1.333-1.333v-4c0-3.112-0.899-6.132-2.597-8.731z"></path>
                                        </svg>
                                    </i>
                                    <span>Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a href="orders.php">
                                    <i>
                                        <!-- Generated by IcoMoon.io -->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                            <title>box-bankers</title>
                                            <path d="M28 1.333h-24c-2.205 0-4 1.795-4 4v5.333c0 0.736 0.597 1.333 1.333 1.333v14.667c0 2.205 1.795 4 4 4h21.333c2.205 0 4-1.795 4-4v-14.667c0.736 0 1.333-0.597 1.333-1.333v-5.333c0-2.205-1.795-4-4-4zM28 26.667c0 0.735-0.599 1.333-1.333 1.333h-21.333c-0.735 0-1.333-0.599-1.333-1.333v-14.667h5.333v2.667c0 1.471 1.196 2.667 2.667 2.667h8c1.471 0 2.667-1.196 2.667-2.667v-2.667h5.333zM12 14.667v-2.667h8v2.667zM29.333 9.333h-26.667v-4c0-0.735 0.599-1.333 1.333-1.333h24c0.735 0 1.333 0.599 1.333 1.333z"></path>
                                        </svg>
                                    </i>
                                    <span>Orders</span>
                                </a>
                            </li>
                            <li>
                                <a href="pending_orders.php">
                                    <i>
                                        <!-- Generated by IcoMoon.io -->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 30 32">
                                            <title>cart</title>
                                            <path d="M15.426 28.084c0-1.412-0.85-2.684-2.156-3.226-1.305-0.54-2.807-0.241-3.805 0.758-0.999 0.998-1.298 2.5-0.758 3.805 0.54 1.303 1.815 2.155 3.226 2.155 1.928-0.003 3.49-1.564 3.492-3.492h0.001zM10.597 28.084h0.001c0-0.54 0.326-1.027 0.825-1.235 0.498-0.206 1.074-0.091 1.455 0.29 0.383 0.382 0.497 0.957 0.29 1.456-0.208 0.5-0.695 0.825-1.235 0.825-0.355 0-0.695-0.142-0.944-0.391-0.251-0.251-0.392-0.591-0.392-0.946h-0.001l0.001 0.001zM28.23 28.084c0-1.412-0.85-2.684-2.155-3.226-1.305-0.54-2.807-0.241-3.806 0.758s-1.297 2.5-0.756 3.805c0.54 1.303 1.813 2.155 3.226 2.155 1.927-0.003 3.49-1.564 3.491-3.492zM23.401 28.084c0-0.54 0.326-1.027 0.825-1.235 0.5-0.206 1.075-0.091 1.457 0.29s0.497 0.957 0.289 1.456c-0.206 0.5-0.693 0.825-1.233 0.825-0.738 0-1.337-0.599-1.337-1.337l-0.001 0.001zM1.953 0.234l-0.342-0.059c-0.29-0.064-0.594-0.004-0.839 0.166-0.247 0.169-0.414 0.436-0.463 0.734-0.050 0.3 0.023 0.607 0.201 0.85s0.444 0.402 0.738 0.44l0.341 0.059c1.825 0.324 3.248 1.794 3.548 3.662l1.981 12.369h-0.001c0.218 1.387 0.913 2.651 1.96 3.563s2.379 1.412 3.754 1.41h14.242c0.601 0 1.088-0.498 1.088-1.112s-0.487-1.112-1.088-1.112h-14.242c-1.679-0.001-3.139-1.183-3.525-2.854h11.463c1.614 0.004 3.188-0.518 4.493-1.49 1.305-0.973 2.271-2.346 2.762-3.918l1.298-4.136c0.145-0.455 0.065-0.953-0.213-1.336-0.278-0.385-0.72-0.608-1.187-0.602h-20.467l-0.181-1.141c-0.218-1.367-0.849-2.631-1.802-3.615-0.954-0.983-2.184-1.64-3.518-1.878h-0.001zM26.946 9.096l-0.993 3.169v-0.001c-0.353 1.122-1.044 2.101-1.975 2.796s-2.056 1.067-3.208 1.067h-11.833l-1.125-7.042 19.134 0.011z"></path>
                                        </svg>
                                    </i>
                                    <span>Pending Payments</span>
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.php">
                                    <i>
                                        <!-- Generated by IcoMoon.io -->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                            <title>star</title>
                                            <path d="M31.819 12.077c-0.367-0.883-1.209-1.411-2.259-1.411h-8.437l-2.681-8.871c-0.347-1.075-1.329-1.796-2.443-1.796s-2.096 0.721-2.447 1.805l-2.788 8.861h-8.275c-1.076 0-1.939 0.533-2.308 1.427-0.375 0.904-0.159 2.012 0.525 2.693 0.044 0.044 0.092 0.085 0.141 0.124l6.811 5.101-2.773 8.567c-0.344 1.063 0.019 2.228 0.899 2.899 0.459 0.351 1.001 0.527 1.544 0.527 0.528 0 1.056-0.165 1.511-0.499l7.159-5.267 7.161 5.268c0.896 0.659 2.168 0.645 3.051-0.028 0.884-0.671 1.245-1.836 0.901-2.9l-2.773-8.567 6.811-5.101c0.051-0.037 0.099-0.080 0.143-0.124 0.687-0.687 0.904-1.8 0.528-2.709zM21.976 18.448c-0.456 0.343-0.644 0.936-0.469 1.477l3.044 9.293-7.763-5.711c-0.235-0.173-0.513-0.259-0.791-0.259s-0.556 0.085-0.791 0.259l-7.713 5.676 2.997-9.257c0.175-0.541-0.013-1.136-0.469-1.477l-6.829-5.116h8.551c0.583 0 1.097-0.377 1.272-0.933l2.981-9.479 2.861 9.465c0.169 0.561 0.688 0.947 1.276 0.947h8.672z"></path>
                                        </svg>
                                    </i>
                                    <span>Wishlist</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.profile',auth()->user()->id) }}">
                                    <i>
                                        <!-- Generated by IcoMoon.io -->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                            <title>user-circle</title>
                                            <path d="M16 22.964c-4.525 0-8.447 1.713-9.993 4.365-0.371 0.636-0.156 1.452 0.48 1.823s1.453 0.156 1.823-0.48c0.855-1.465 3.624-3.041 7.689-3.041s6.835 1.576 7.689 3.041c0.249 0.424 0.696 0.661 1.155 0.661 0.228 0 0.459-0.059 0.669-0.181 0.637-0.371 0.852-1.187 0.48-1.823-1.545-2.652-5.467-4.365-9.992-4.365zM22.667 13.631c0-3.676-2.991-6.667-6.667-6.667s-6.667 2.991-6.667 6.667 2.991 6.667 6.667 6.667 6.667-2.992 6.667-6.667zM12 13.631c0-2.205 1.795-4 4-4s4 1.795 4 4-1.795 4-4 4-4-1.795-4-4zM16 0.297c-8.823 0-16 7.177-16 16 0 2.941 0.821 5.831 2.373 8.357 0.252 0.411 0.689 0.636 1.137 0.636 0.239 0 0.479-0.064 0.696-0.197 0.628-0.385 0.824-1.207 0.439-1.833-1.295-2.108-1.979-4.516-1.979-6.963 0-7.352 5.981-13.333 13.333-13.333s13.333 5.981 13.333 13.333c0 2.448-0.684 4.856-1.979 6.961-0.385 0.628-0.189 1.448 0.437 1.835 0.627 0.384 1.448 0.189 1.835-0.437 1.553-2.527 2.373-5.416 2.373-8.359 0-8.823-7.177-16-16-16z"></path>
                                        </svg>
                                    </i>
                                    <span>My Account</span>
                                </a>
                            </li>
                            <li>
                                <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                <a href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i>
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                            <title>send-out</title>
                                            <path d="M16 26.667h-9.333c-0.736 0-1.333-0.597-1.333-1.333v-18.667c0-0.736 0.597-1.333 1.333-1.333h9.333c0.737 0 1.333-0.596 1.333-1.333s-0.596-1.333-1.333-1.333h-9.333c-2.205 0-4 1.795-4 4v18.667c0 2.205 1.795 4 4 4h9.333c0.737 0 1.333-0.596 1.333-1.333s-0.596-1.333-1.333-1.333zM29.231 15.491c-0.068-0.164-0.167-0.312-0.289-0.436l-5.332-5.332c-0.521-0.521-1.364-0.521-1.885 0s-0.521 1.364 0 1.885l3.057 3.059h-12.781c-0.737 0-1.333 0.596-1.333 1.333s0.596 1.333 1.333 1.333h12.781l-3.057 3.057c-0.521 0.521-0.521 1.364 0 1.885 0.26 0.26 0.601 0.391 0.943 0.391s0.683-0.131 0.943-0.391l5.332-5.332c0.124-0.123 0.221-0.271 0.289-0.435 0.135-0.325 0.135-0.693 0-1.019z"></path>
                                        </svg>
                                    </i>
                                    <span>Logout</span>
                                </a>

                            </li>
                        </ul>
                    </div>
                </aside>
                <main>
                    <h1>My Account</h1>
                    @if(session('success'))
    <div id="alert" class="alert" style="display: none;">
        <div id="progress-bar" class="progress-bar"></div>
        <div class="alert-message">{{ session('success') }}</div>
    </div>
@endif
                    <form action="{{ route('user.updateProfile', $user) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="account-form">
                            <div class="ac-item">
                                <label for="first-name">First Name</label>
                                <input type="text" name="first_name" id="first-name" placeholder="First Name" required class="form-input" value="{{ old('first_name', $user->first_name) }}">
                                @error('first_name')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="ac-item">
                                <label for="last-name">Last Name</label>
                                <input type="text" name="last_name" id="last-name" placeholder="Last Name" required class="form-input" value="{{ old('last_name', $user->last_name) }}">
                                @error('last_name')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="ac-item">
                                <label for="birthday">Birth Date</label>
                                <input class="flatpickr flatpickr-input s-datetime-picker-input" type="text" name="birthday" placeholder="Select Date.." readonly="readonly" value="{{ old('birthday', $user->birthday) }}">
                                @error('birthday')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="ac-item">
                                <label for="gender">Gender</label>
                                <select class="form-input" name="gender" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                                @error('gender')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="ac-item">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-input" required placeholder="Email Address" value="{{ old('email', $user->email) }}">
                                @error('email')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="ac-item">
                                <label for="phone">Mobile Number</label>
                                <input id="phone" type="tel" name="phone_number" class="s-tel-input-control" value="{{ old('phone_number', $user->phone_number) }}">
                                @error('phone_number')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="w-full">
                            <button type="submit" loader-position="end" class="w-full mt-6 sm:mt-8 s-button-element s-button-btn s-button-solid s-button-primary s-button-loader-end">
                                <span class="s-button-text">Save</span>
                            </button>
                        </div>
                    </form>


                    <div class="promotion">
                        <a class="s-list-tile-item" target="_self">
                            <div class="s-list-tile-item-icon">
                                <div slot="icon" class="s-user-settings-section-icon">
                                    <span><!-- Generated by IcoMoon.io -->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                            <title>bullhorn</title>
                                            <path d="M30.129 0.264c-0.339-0.252-0.776-0.328-1.179-0.208l-24.951 7.485v-0.216c0-0.736-0.597-1.333-1.333-1.333s-1.333 0.597-1.333 1.333v14.667c0 0.736 0.597 1.333 1.333 1.333s1.333-0.597 1.333-1.333v-0.112l3.448 1.207-0.595 1.704c-0.321 1.019-0.227 2.103 0.267 3.051s1.327 1.647 2.345 1.968l6.359 2.004c0.399 0.127 0.804 0.187 1.201 0.187 1.699 0 3.277-1.091 3.812-2.785l0.423-1.295 7.633 2.672c0.143 0.049 0.292 0.075 0.44 0.075 0.273 0 0.543-0.084 0.772-0.247 0.352-0.249 0.561-0.655 0.561-1.087v-28c0-0.421-0.199-0.819-0.537-1.069zM18.297 28.4c-0.221 0.701-0.973 1.089-1.673 0.871l-6.357-2.004c-0.34-0.108-0.617-0.34-0.781-0.656s-0.196-0.676-0.101-0.977l0.581-1.665 8.777 3.072zM28 27.453l-24-8.4v-8.728l24-7.2z"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="s-list-tile-item-content">
                                <div class="s-list-tile-item-title">
                                    <div slot="title" class="s-user-settings-section-title">Promotional messages</div>
                                </div>
                                <div class="s-list-tile-item-subtitle">
                                    <div slot="subtitle" class="s-user-settings-section-subtitle">You can control disabling or activating the promotional messages that appear when you visit the store.</div>
                                </div>
                            </div>
                            <div class="s-list-tile-item-action">
                                <div slot="action" class="s-user-settings-section-action">
                                    <label class="s-toggle">
                                        <input class="s-toggle-input" type="checkbox">
                                        <div class="s-toggle-switcher"></div>
                                    </label>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="promotion">
                        <a class="s-list-tile-item" target="_self">
                            <div class="s-list-tile-item-icon">
                                <div slot="icon" class="s-user-settings-section-icon">
                                    <span>
                                        <!-- Generated by IcoMoon.io -->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                            <title>user-off</title>
                                            <path d="M10.837 19.309c-4.963 1.284-8.171 4.303-8.171 7.691v3.667c0 0.736 0.597 1.333 1.333 1.333s1.333-0.597 1.333-1.333v-3.667c0-2.101 2.48-4.155 6.172-5.109 0.713-0.184 1.141-0.912 0.957-1.625-0.184-0.711-0.908-1.137-1.625-0.956zM12.859 3.715c0.933-0.685 2.020-1.048 3.141-1.048 2.941 0 5.333 2.392 5.333 5.333 0 1.121-0.363 2.208-1.048 3.141-0.436 0.593-0.308 1.428 0.284 1.864 0.239 0.175 0.515 0.259 0.788 0.259 0.411 0 0.815-0.188 1.076-0.544 1.025-1.393 1.567-3.025 1.567-4.72 0-4.412-3.588-8-8-8-1.695 0-3.327 0.541-4.721 1.567-0.592 0.435-0.72 1.269-0.284 1.864 0.436 0.593 1.269 0.721 1.864 0.284zM31.609 29.724l-29.333-29.333c-0.521-0.521-1.364-0.521-1.885 0s-0.521 1.364 0 1.885l29.333 29.333c0.26 0.26 0.601 0.391 0.943 0.391s0.683-0.131 0.943-0.391c0.521-0.521 0.521-1.364 0-1.885z"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="s-list-tile-item-content">
                                <div class="s-list-tile-item-title">
                                    <div slot="title" class="s-user-settings-section-title">Deactivate account</div>
                                </div>
                                <div class="s-list-tile-item-subtitle">
                                    <div slot="subtitle" class="s-user-settings-section-subtitle">You can delete your account from the store, which includes your previous orders, favorites.</div>
                                </div>
                            </div>
                            <div class="s-list-tile-item-action">
                                <div slot="action" class="s-user-settings-section-action">
                                    <button type="button" class="undefined s-button-element s-button-btn s-button-outline s-button-danger-outline s-button-loader-after">
                                        <span class="s-button-text">Deactivate account</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>

                </main>
            </div>
        </div>
    </div>
</section>
<!-- ./user-layout -->

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var alertBox = document.getElementById('alert');
        var progressBar = document.getElementById('progress-bar');
        var message = document.querySelector('.alert-message');

        // Show the alert
        alertBox.style.display = 'block';

        // Set background color for the alert
        alertBox.style.backgroundColor = '#28a745'; // Green color for success

        // Set background color for the progress bar
        progressBar.style.backgroundColor = '#ffc107'; // Yellow color for progress

        // Set text color for the message
        message.style.color = '#fff'; // White text color for visibility

        // Set progress bar width to 0 initially
        progressBar.style.width = '0%';

        // Animate progress bar
        var width = 0;
        var animationInterval = setInterval(function () {
            if (width >= 100) {
                clearInterval(animationInterval);
                // Hide the alert after animation completes
                setTimeout(function () {
                    alertBox.style.display = 'none';
                }, 1000);
            } else {
                width += 1;
                progressBar.style.width = width + '%';
            }
        }, 30);
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@20.2.0/build/js/intlTelInput.min.js"></script>

<script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        showSelectedDialCode: true,
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            fetch("https://ipapi.co/json")
                .then(function(res) { return res.json(); })
                .then(function(data) { callback(data.country_code); })
                .catch(function() { callback(); });
        },
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@20.2.0/build/js/utils.js",
    });
</script>

@endsection

