<x-layouts.app title="ログイン">
    <div class="min-h-[70vh] flex items-center justify-center py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            {{-- ヘッダー・ロゴ --}}
            <div class="text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white">
                    {{ config('app.name', 'Laravel') }} にログイン
                </h2>
                <p class="mt-2 text-sm text-slate-400">
                    ユーザー名とパスワードを入力してください
                </p>
            </div>

            {{-- ログインフォームカード --}}
            <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 sm:p-8 shadow-xl space-y-6">
                {{-- ステータスメッセージ --}}
                @if (session('status'))
                    <div class="bg-emerald-950/50 border border-emerald-800 rounded-lg p-3 text-emerald-300 text-sm">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- 全体エラー表示（認証失敗など） --}}
                @if (isset($errors) && $errors->any())
                    <div class="bg-rose-950/50 border border-rose-800 rounded-lg p-3 text-rose-300 text-sm space-y-1">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

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

                    {{-- ログイン維持（Remember Me） --}}
                    <div class="flex items-center justify-between">
                        <label for="remember" class="flex items-center gap-2 cursor-pointer select-none">
                            <input id="remember" type="checkbox" name="remember"
                                class="w-4 h-4 rounded"
                            />
                            <span class="text-sm text-slate-300">ログイン状態を保持する</span>
                        </label>
                    </div>

                    {{-- 送信ボタン --}}
                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-1/3 rounded-lg py-2.5 text-sm font-semibold text-white bg-indigo-600 cursor-pointer"
                        >
                            ログイン
                        </button>
                    </div>
                </form>

                {{-- 新規登録リンク（有効な場合のみ） --}}
                @if (Route::has('register'))
                    <div class="pt-4 border-t border-slate-800 text-center">
                        <p class="text-sm text-slate-400">
                            アカウントをお持ちでないですか？
                            <a href="{{ route('register') }}" class="font-medium text-indigo-400">
                                新規登録
                            </a>
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layouts.app>
