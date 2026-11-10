<x-layouts.app title="リダイレクトされたページ">
    <div class="min-h-[70vh] flex items-center justify-center py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 sm:p-8 shadow-xl space-y-6">
                <div>
                    <p>{{ Auth::user()->name }}がログインしました。</p>
                    <p>このページはログイン後にリダイレクトしたページです。</p>
                </div>

                <div class="flex justify-center">
                    <a href="{{ route('home') }}"
                        class="w-1/3 rounded-lg py-2.5 text-sm font-semibold text-white bg-indigo-600"
                    >
                        <span class="flex justify-center">homeに移動</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
