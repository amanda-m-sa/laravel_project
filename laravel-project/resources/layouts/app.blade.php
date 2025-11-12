<DOCTYPE html>
    <html lang="pt-BR" class="h-full bg-gray-50">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', "Posts")</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="min-h-screen flex flex-col font-sans antialiased text-gray-800">

        <!-- Navbar -->
        <nav class="bg-white dorder-b border-gray-200 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
                <a href="{{ url('/posts')}}" class="text-lg font-semibold text-gray-900 hover:text-indigo-600">
                </a>
            </div>
        </nav>

        <!-- Page Header -->
        @hasSection('header')
        <header class="bg-gray-100 border-b border-gray-200">
            <div class="max-w-7xl mx-auto py-6 px-4">
                <h1 class="text-2xl fomt-bold text-gray-900">@yield('header')</h1>
            </div>
        </header>
        @endif

        <!-- Main Content -->
        <main class="flex-1 max-w-7xl mx-auto w-full px-4 py-6">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200 mt-auto">
            <div class="max-w-7xl mx-auto px-4 py-4 text-sm text-center text-gray-500">
                &copy; {{ date('Y') }} {{ config('app.name') }}, Direitos reservados.
            </div>
        </footer>

    </body>

    </html>