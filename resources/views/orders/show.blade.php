@extends('layouts.auth')

@section('title', "تفاصيل الطلب {$order->number} | متجر النخبة")

@section('content')
    <div class="card">
        <div>
            <div class="card-title">تفاصيل الطلب رقم {{ $order->number }}</div>
            <p class="card-text">ملخص شامل عن حالة الطلب، التتبع، وعنوان التوصيل.</p>
        </div>

        <div class="dashboard-grid">
            <div class="dashboard-item">
                <strong>الحالة</strong>
                <span class="card-text">{{ $order->status }}</span>
            </div>
            <div class="dashboard-item">
                <strong>القيمة الإجمالية</strong>
                <span class="card-text">{{ number_format($order->total, 2) }} د.أ</span>
            </div>
            <div class="dashboard-item">
                <strong>تاريخ الطلب</strong>
                <span class="card-text">{{ optional($order->placed_at)->format('Y/m/d - h:i A') }}</span>
            </div>
            <div class="dashboard-item">
                <strong>رمز التتبع</strong>
                <span class="card-text">{{ $order->tracking_code ?? 'سيتم تحديثه قريبًا' }}</span>
            </div>
        </div>

        <div class="card" style="max-width: none;">
            <strong>عنوان الشحن</strong>
            <p class="card-text">{{ $order->shipping_address }}</p>
        </div>

        <div class="actions">
            <a class="cta-secondary" href="{{ route('orders.index') }}">العودة للطلبات</a>
            <a class="cta-primary" href="{{ route('home') }}">العودة للوحة المشتري</a>
        </div>
    </div>
@endsection
