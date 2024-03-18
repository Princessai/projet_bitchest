@extends('layouts.userDashboard');
@section('bodycontent')
<div class=" text-center">
  <div class="row">
    <div class="col-md-12 d-flex  flex-column mt-5 soldeAccount">
     <h6 class="text-light mt-3 align-self-start ">Portfolio Balance</h6>
     <h4 class="text-light align-self-start">10 .000 £</h4>

    </div>
    <div class="col-md-12 d-flex flex-column mt-5 soldeAccount">
    <h6 class="text-light mt-3 align-self-start ">My crypto</h6>
     <h4 class="text-light align-self-start">0 £</h4>
     <div class="shadow p-3 mb-5 bg-body rounded me-5 ">
  <table class=" table align-middle  mb-5 mb-0 ">
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
                   
                    <th>

                    </th>
                 
                </tr>
                    </thead>
                    <tbody class="rounded">
                      <tr class=" ">
                        <td class="  border-bottom-0"><h6 class="fw-semibold mb-0"> <img src="{{ asset('assets/images/Bitcoin.png') }}" alt="" class=" "></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold fz-5 mb-1">Bitcoin</h6>
                                                    
                        </td>
                        <td class="border-bottom-0 ">
                          <p class="mb-0 fw-normal">10 000 $</p>
                        </td>
                       <td>
                       <a href=""><button class="shadoww__btn">See All</button> </a> 
                       </td>
                      </tr> 
                    </tbody>
                  </table>
     </div>
   
    </div>
  </div>
</div>
@endsection
