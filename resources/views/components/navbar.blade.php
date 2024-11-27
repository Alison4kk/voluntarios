<div
    class="w-full z-40 py-4 px-6 bg-white/90 shadow-2xl shadow-indigo-100 dark:shadow-dark-800/30 border-b border-slate-300/70 dark:border-dark-600/70 dark:bg-dark-700/80">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-center items-center md:justify-between gap-5 flex-wrap">
            <x-logo></x-logo>

            <div class="flex justify-end items-center space-x-5">

                @guest
                    <a href="{{ route('login') }}">
                        <x-bladewind::button radius="full" outline="true" type="secondary">Entrar</x-bladewind::button>
                    </a>

                    <a href="{{ route('register') }}">
                        <x-bladewind::button radius="full" type="secondary">Cadastrar</x-bladewind::button>
                    </a>
                @endguest
                @auth
                    <x-bladewind::dropmenu>
                        <x-slot:trigger>
                            <div class="flex space-x-2 items-center px-4 rounded-md">
                                <div class="grow">
                                </div>
                                <div class="grow">
                                    <div><strong>{{ auth()->user()->name }}</strong></div>
                                </div>
                                <div>
                                    <x-bladewind::icon name="chevron-down" class="!h-4 !w-4" />
                                </div>
                            </div>
                        </x-slot:trigger>
                        <x-bladewind::dropmenu-item>
                            <a href="{{ route('home.start') }}">
                                Inicio
                            </a>
                        </x-bladewind::dropmenu-item>
                        <x-bladewind::dropmenu-item>
                            <a href="{{ route('dashboard') }}">
                                Meu Perfil
                            </a>
                        </x-bladewind::dropmenu-item>
                        <x-bladewind::dropmenu-item>
                            <a href="{{ route('logout-get') }}">
                                Sair
                            </a>
                        </x-bladewind::dropmenu-item>
                    </x-bladewind::dropmenu>

                @endauth
            </div>
        </div>
    </div>
</div>
