<x-layouts.app title="マイホーム">
    <div class="min-h-[70vh] flex items-center justify-center py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 sm:p-8 shadow-xl space-y-6">
                <div>
                    <p>{{ Auth::user()->name }}がログインしました。</p>
                    <p>{{ Auth::user()->email }}がメールアドレスです。</p>
                </div>

                <form method="POST" action="{{ route('logout') }}" class="space-y-5">
                    @csrf

                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-1/3 rounded-lg py-2.5 text-sm font-semibold text-white bg-indigo-600 cursor-pointer"
                        >
                            ログアウト
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
