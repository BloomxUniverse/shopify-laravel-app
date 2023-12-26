@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
@endsection

@section('scripts')
    @parent
    <p>{{shopify-app::get('admin/products.json')}}</p>
    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection