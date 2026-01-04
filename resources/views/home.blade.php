@extends('layouts.auth')

@section('title', 'لوحة التحكم | متجر النخبة')

@section('content')
    <div class="card">
        <div>
            <div class="card-title">مرحبًا {{ auth()->user()->name }}</div>
            <p class="card-text">
                حسابك جاهز! يمكنك الآن متابعة الطلبات، تحديث العناوين، واستكشاف أحدث مجموعات الكراسي والأسرّة والأدوات الصحية.
            </p>
        </div>

        @if (session('status'))
            <div class="success">{{ session('status') }}</div>
        @endif

        <div class="actions">
            <a class="cta-primary" href="{{ url('/') }}">العودة للصفحة الرئيسية</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="cta-secondary" type="submit">تسجيل الخروج</button>
            </form>
        </div>
    </div>
@endsection
