<html>
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body class="background-image flex items-center justify-center">
        <div class="flex items-center justify-center space-x-16">
            <div class="relative">
                <h1 class="text-2xl font-semibold text-left mb-2 text-white">Pulihkan Akunmu</h1>
                <p class="text-left mb-6 text-white">Mulai kembali menikmati konser dengan mudah!</p>
            
                <div class="bg-white p-6 rounded-2xl shadow-xl relative w-80">
                    <div class="transparan absolute -top-4 -left-4 bg-blue-200 w-12 h-12 rounded-full"></div>
                    <div class="transparan absolute -bottom-4 -right-4 bg-purple-200 w-12 h-12 rounded-full"></div>
                    @if ($errors->any())
                        <div class="text-red-500 text-sm">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="space-y-2" action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}" required>
                        <input type="hidden" name="email" value="{{ $email ?? old('email') }}">
                        <div>
                            <label class="block text-sm font-medium mb-1" for="password">Kata Sandi Baru</label>
                            <input class="w-full border border-gray-300 rounded-full px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-300 hover:border-blue-400 transition duration-200" id="password" name="password" type="password" required/>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1" for="password">Konfirmasi Kata Sandi Baru</label>
                            <input class="w-full border border-gray-300 rounded-full px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-300 hover:border-blue-400 transition duration-200" id="password_confirmation" name="password_confirmation" type="password"/>
                        </div>
                        <button class="w-full bg-purple-600 text-white py-2 rounded-full hover:bg-blue-500 hover:text-white transition duration-300">Ganti Kata Sandi</button>
                    </form>
                </div>
            </div>
                <div class="hidden md:block">
                    <img alt="login" src="/assets/reset-password.svg" height="300" width="300"/>
                </div>
        </div>
    </body>
</html>