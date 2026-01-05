@extends('layouts.auth')


@section('title', 'لوحة المشتري | متجر النخبة')


@section('content')
    <div class="card">
        <div>
            <div class="card-title">مرحبًا {{ auth()->user()->name }}</div>
            <p class="card-text">

                هذه لوحة المشتري الخاصة بك. تابع طلبات المعدات الطبية، جهّز قوائمك المفضلة، وتواصل مع فريق الدعم الفني بسهولة.

            </p>
        </div>

        @if (session('status'))
            <div class="success">{{ session('status') }}</div>
        @endif


        <div class="dashboard-grid">
            <div class="dashboard-item">
                <strong>طلباتي</strong>
                <span class="card-text">مراجعة الطلبات الحالية وسجل المشتريات الطبية.</span>
            </div>
            <div class="dashboard-item">
                <strong>قوائم التوريد</strong>
                <span class="card-text">حفظ قوائم بالمستلزمات المتكررة للطلب السريع.</span>
            </div>
            <div class="dashboard-item">
                <strong>الدعم الفني</strong>
                <span class="card-text">تذاكر الصيانة والتركيب والتدريب على الأجهزة.</span>
            </div>
            <div class="dashboard-item">
                <strong>العناوين والشحن</strong>
                <span class="card-text">إدارة عناوين التوصيل للعيادات والمراكز.</span>
            </div>
        </div>

        <div class="actions">
            <a class="cta-primary" href="{{ url('/') }}">العودة للصفحة الرئيسية</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="cta-secondary" type="submit">تسجيل الخروج</button>
            </form>
        </div>
    </div>
@endsection
