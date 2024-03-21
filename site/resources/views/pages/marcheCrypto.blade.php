@extends('layouts.userDashboard')

@section('bodycontent')
    @php
        use App\Models\Crypto;

    @endphp

    <h5 class=" mt-3 text-info  ms-4  fw-semibold mb-4">BUY & SELL</h5>
    @cannot('do_transaction')
        <div>
            <a href="{{ route('addcrypto') }}"><button class="shadoww__btn mb-3">Add crypto</button></a>
        </div>
    @endcannot
    <div class="table-responsive rounded shadow p-3 mb-5 bg-body  rounded ">
        <table class="table text-nowrap   mb-5 mb-0 align-middle">
            <thead class="text-light fs-4">
                <tr>

                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0"></h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">current Course</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0"></h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0"></h6>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cryptos as $crypto)
                    @php
                        $isAdmin = Auth::user()->isAdmin();

                        $routeCourCrypto = route('cours.crypto.customer', ['crypto_id' => $crypto->id]);

                        if ($isAdmin) {
                            $routeCourCrypto = route('cours.crypto.admin', ['crypto_id' => $crypto->id]);
                        }
                    @endphp

                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0"> <img src="{{ asset("storage/img/$crypto->image") }}"
                                    alt="" width="40%"></h6>
                        </td>
                        <td class="border-bottom-0">

                            <h6 class="fw-semibold mb-1">{{ $crypto->label }}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ Crypto::getCoursActuel($crypto->id) }} €</p>
                        </td>
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                <a href="{{ $routeCourCrypto }}"><button class="shadoww__btn">see more</button></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
