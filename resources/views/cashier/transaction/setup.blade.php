@extends('layouts.cashier')

@section('content')
    <livewire:setup-customer-transaction :transaction="$transaction" />
@endsection
