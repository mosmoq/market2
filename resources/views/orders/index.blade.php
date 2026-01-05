@extends('layouts.auth')

@section('title', 'الطلبات الحالية | متجر النخبة')

@section('content')
    <div class="card">
        <div>
            <div class="card-title">الطلبات الحالية</div>
            <p class="card-text">تابع حالة الطلبات، التتبع اللحظي، وإدارة الاستلام بسهولة من مكان واحد.</p>
        </div>

        @if ($orders->count() === 0)
            <div class="card" style="max-width: none;">
                <strong>لا توجد طلبات بعد</strong>
                <p class="card-text">ابدأ بإضافة طلبك الأول من خلال تصفح معداتك الطبية المطلوبة.</p>
                <div class="actions" style="justify-content: flex-start;">
                    <a class="cta-primary" href="{{ url('/') }}">تصفح المنتجات</a>
                </div>
            </div>
        @else
            <div class="dashboard-grid">
                @foreach ($orders as $order)
                    <a class="dashboard-item" href="{{ route('orders.show', $order) }}">
                        <strong>طلب رقم {{ $order->number }}</strong>
                        <span class="card-text">الحالة: {{ $order->status }}</span>
                        <span class="card-text">القيمة: {{ number_format($order->total, 2) }} د.أ</span>
                        <span class="card-text">تاريخ الطلب: {{ optional($order->placed_at)->format('Y/m/d') }}</span>
                    </a>
                @endforeach
            </div>

            <div style="margin-top: 1rem;">
                {{ $orders->links() }}
            </div>
        @endif

        <div class="actions">
            <a class="cta-secondary" href="{{ route('home') }}">العودة للوحة المشتري</a>
        </div>
    </div>
@endsection
