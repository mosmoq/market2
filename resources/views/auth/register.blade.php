@extends('layouts.auth')

@section('title', 'إنشاء حساب | متجر النخبة')

@section('content')
    <div class="card">
        <div>

            <div class="card-title">انضم إلى متجر النخبة الطبي</div>
            <p class="card-text">أنشئ حسابك للوصول إلى أحدث المعدات الطبية، العروض، وخدمات ما بعد البيع.</p>

        </div>

        @if ($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.submit') }}" style="display: grid; gap: 1.2rem;">
            @csrf
            <div class="input-group">
                <label for="name">الاسم الكامل</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" />
            </div>
            <div class="input-group">
                <label for="email">البريد الإلكتروني</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
            </div>
            <div class="input-group">
                <label for="password">كلمة المرور</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>
            <div class="input-group">
                <label for="password_confirmation">تأكيد كلمة المرور</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <button class="cta-primary" type="submit">تسجيل الحساب</button>
        </form>
    </div>

    <div class="footer-link">
        لديك حساب بالفعل؟ <a href="{{ route('login') }}">تسجيل الدخول</a>
    </div>
@endsection
