@extends('layouts.auth')

@section('title', 'لوحة المشتري | متجر النخبة')

@section('content')
    <div class="card">
        <div>
            <div class="card-title">مرحبًا {{ auth()->user()->name }}</div>
            <p class="card-text">
                هذه لوحة المشتري الشاملة لإدارة مشتريات المعدات الطبية بسهولة. تابع الطلبات، احفظ قوائم التوريد، وراجع الفواتير
                وخدمات الصيانة في مكان واحد.
            </p>
        </div>

        @if (session('status'))
            <div class="success">{{ session('status') }}</div>
        @endif

        <div class="dashboard-grid">
            <a class="dashboard-item" href="{{ route('orders.index') }}">
                <strong>الطلبات الحالية</strong>
                <span class="card-text">متابعة حالة الطلبات، التتبع اللحظي، وإدارة الاستلام.</span>
            </a>
            <div class="dashboard-item">
                <strong>المشتريات السابقة</strong>
                <span class="card-text">سجل شامل بالمشتريات مع إمكانية إعادة الطلب بسرعة.</span>
            </div>
            <div class="dashboard-item">
                <strong>القوائم الذكية</strong>
                <span class="card-text">قوائم توريد مخصصة للعيادات والمراكز الطبية.</span>
            </div>
            <div class="dashboard-item">
                <strong>العروض والتنبيهات</strong>
                <span class="card-text">تنبيهات فورية على العروض والمخزون المتجدد.</span>
            </div>
            <div class="dashboard-item">
                <strong>العناوين والشحن</strong>
                <span class="card-text">إدارة عناوين التوصيل وجدولة الشحنات.</span>
            </div>
            <div class="dashboard-item">
                <strong>الفواتير والمدفوعات</strong>
                <span class="card-text">تحميل الفواتير، تتبع المدفوعات، وخيارات دفع مرنة.</span>
            </div>
            <div class="dashboard-item">
                <strong>الضمان والصيانة</strong>
                <span class="card-text">تذاكر صيانة، مواعيد زيارات فنية، وتغطية الضمان.</span>
            </div>
            <div class="dashboard-item">
                <strong>الدعم الفني</strong>
                <span class="card-text">تواصل مباشر مع الخبراء لتشغيل الأجهزة والتدريب.</span>
            </div>
            <div class="dashboard-item">
                <strong>المفضلة</strong>
                <span class="card-text">حفظ المعدات المهمة ومقارنتها قبل الشراء.</span>
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
