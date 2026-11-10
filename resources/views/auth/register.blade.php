<x-layouts.app title="新規登録">
    <div class="min-h-[70vh] flex items-center justify-center py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            {{-- ヘッダー・ロゴ --}}
            <div class="text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white">
                    {{ config('app.name', 'Laravel') }} に登録
                </h2>
            </div>

            {{-- ログインフォームカード --}}
            <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 sm:p-8 shadow-xl space-y-6">
                {{-- ステータスメッセージ --}}
                @if (session('status'))
                    <div class="bg-emerald-950/50 border border-emerald-800 rounded-lg p-3 text-emerald-300 text-sm">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- 全体エラー表示 --}}
                @if (isset($errors) && $errors->any())
                    <div class="bg-rose-950/50 border border-rose-800 rounded-lg p-3 text-rose-300 text-sm space-y-1">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    {{-- ユーザー名 --}}
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-300 mb-2">
                            ユーザー名
                        </label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}"
                            required placeholder="ユーザー名を入力"
                            class="w-full border rounded-lg px-4 py-2.5 text-white "
                        />
                    </div>

                    {{-- メールアドレス --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-300 mb-2">
                            メールアドレス
                        </label>
                        <input id="email" type="text" name="email" value="{{ old('email') }}"
                            required placeholder="メールアドレスを入力"
                            class="w-full border rounded-lg px-4 py-2.5 text-white "
                        />
                    </div>

                    {{-- パスワード --}}
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label for="password" class="block text-sm font-medium text-slate-300">
                                パスワード
                            </label>
                        </div>
                        <input id="password" type="password" name="password"
                            required placeholder="••••••••"
                            class="w-full border rounded-lg px-4 py-2.5 text-white "
                        />
                    </div>

                    {{-- パスワード確認 --}}
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label for="password_confirmation" class="block text-sm font-medium text-slate-300">
                                パスワード確認
                            </label>
                        </div>
                        <input
                            id="password_confirmation" type="password" name="password_confirmation"
                            required placeholder="••••••••"
                            class="w-full border rounded-lg px-4 py-2.5 text-white "
                        />
                    </div>

                    {{-- 登録ボタン --}}
                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-1/3 rounded-lg py-2.5 text-sm font-semibold text-white bg-indigo-600 cursor-pointer"
                        >
                            登録
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
