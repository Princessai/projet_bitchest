@extends('layouts.adminDashboard');

@section('bodycontent')

<h5 class=" mt-3 text-start  ms-4 text-light fw-semibold mb-4">BUY & SELL</h5>
                <div class="table-responsive w-75 rounded shadow p-3 mb-5 bg-body  rounded ">
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
                       
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"> <img src="{{ asset('assets/images/Bitcoin.png') }}" alt="" width="20%"></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Bitcoin</h6>
                                                    
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">10 000 $</p>
                        </td>
                       
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/ethereum.png') }}" alt="" width="20%"></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Ethereum</h6>
                                                   
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">10 000 $</p>
                        </td>
                      
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/cardano.png') }}" alt="" width="20%"></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Cardano</h6>
                                                    
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">10 000 $</p>
                        </td>
                      
                      </tr>      
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/nem.png') }}" alt="" width="20%"></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Nem</h6>
                                                      
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">10 000 $</p>
                        </td>
                      
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/litecoin.png') }}" alt="" width="20%"></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Litecoin</h6>
                                                      
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">10 000 $</p>
                        </td>
                       
                      </tr>   

                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/stellar.png') }}" alt="" width="20%"></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Stellar</h6>

                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">10 000 $</p>
                        </td>
                      
                      </tr>          
                      
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/iota.png') }}" alt="" width="20%"></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Iota</h6>
                                                      
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">10 000 $</p>
                        </td>
                      
                      </tr>          

                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/ripple.png') }}" alt="" width="20%"></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Ripple</h6>
                                                      
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">10 000 $</p>
                        </td>
                       
                      </tr>        
                      
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/dash.png') }}" alt="" width="20%"></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Dash</h6>
                                                      
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">10 000 $</p>
                        </td>
                      
                      </tr>        

                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><img src="{{ asset('assets/images/bitcoin-cash.png') }}" alt="" width="20%"></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Bitcoin cash</h6>
                                                      
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">10 000 $</p>
                        </td>
                       
                      </tr>        
                    </tbody>
                  </table>
                </div>
        
@endsection