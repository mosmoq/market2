@extends('layouts.auth')

@section('title', 'تسجيل الدخول | متجر النخبة')

@section('content')
    <div class="card">
        <div>
            <div class="card-title">مرحبًا بعودتك</div>
            <p class="card-text">سجّل الدخول لإدارة طلباتك الطبية، متابعة الشحنات، والوصول إلى عروض الموردين.</p>
        </div>

        @if (session('status'))
            <div class="success">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}" style="display: grid; gap: 1.2rem;">
            @csrf
            <div class="input-group">
                <label for="email">البريد الإلكتروني</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
            </div>
            <div class="input-group">
                <label for="password">كلمة المرور</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>
            <div class="input-group" style="display: flex; align-items: center; gap: 0.6rem;">
                <input id="remember" type="checkbox" name="remember" style="width: 18px; height: 18px;" />
                <label for="remember">تذكرني على هذا الجهاز</label>
            </div>
            <button class="cta-primary" type="submit">دخول</button>
        </form>
    </div>

    <div class="footer-link">
        ليس لديك حساب؟ <a href="{{ route('register') }}">إنشاء حساب جديد</a>
    </div>
@endsection
