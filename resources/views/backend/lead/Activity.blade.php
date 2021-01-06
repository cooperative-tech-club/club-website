@extends('backend.layouts.app', ['title' => __('User Profile')])

@section('title', '- User Profile')

@section('content')
  @include('backend.layouts.headers.header', [
    'title' => __('Hello') . ' '. auth()->user()->name,
    'description' => __('This is your Activity page. You can find various club events outlisted on the calender.'),
    'class' => 'col-lg-7'
  ])


  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image">
                <a href="#">
                </a>
              </div>
            </div>
          </div>
          </div>
          <div class="pt-0 pt-md-4">
          <div class="row ">
              <div class="card-profile-stats d-flex justify-content-center mt-md-5">          
          <div class="card-body">
          <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4" >
            <div class="d-flex justify-content-between">


            <table border='1'  bordercolor='#FFFFFF' cellspacing='0' cellpadding='0' align=center >
<tr><td><table cellspacing='0' cellpadding='0' align=center  border='1' width='200'><td  align=center bgcolor='#F09040'>  </td><td colspan=5 align=center bgcolor='#F09040'><font size='3' face='Tahoma'>Jan 2021  </td><td  align=center bgcolor='#F09040'>   </td></tr><tr><td><font size='3' face='Tahoma'><b>S</b></font></td><td><font size='3' face='Tahoma'><b>M</b></font></td><td><font size='3' face='Tahoma'><b>T</b></font></td><td><font size='3' face='Tahoma'><b>W</b></font></td><td><font size='3' face='Tahoma'><b>T</b></font></td><td><font size='3' face='Tahoma'><b>F</b></font></td><td><font size='3' face='Tahoma'><b>S</b></font></td></tr><tr><td> </td><td> </td><td> </td><td> </td><td> </td><td valign=top><font size='2' face='Tahoma'>1  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>2  
<br>
 </font></td></tr><tr><td valign=top><font size='2' face='Tahoma'>3  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>4  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>5  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>6  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>7  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>8  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>9  
<br>
 </font></td></tr><tr><td valign=top><font size='2' face='Tahoma'>10  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>11  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>12  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>13  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>14  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>15  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>16  
<br>
 </font></td></tr><tr><td valign=top><font size='2' face='Tahoma'>17  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>18  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>19  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>20  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>21  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>22  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>23  
<br>
 </font></td></tr><tr><td valign=top><font size='2' face='Tahoma'>24  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>25  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>26  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>27  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>28  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>29  
<br>
 </font></td><td valign=top><font size='2' face='Tahoma'>30  
<br>
 </font></td></tr><tr><td valign=top><font size='2' face='Tahoma'>31  
<br>
 </font></td></tr></table></td></tr></table>
           
                  
              @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('status') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif

              
            </form>
          </div>
        </div>
      </div>
    </div>
    @include('backend.layouts.footers.auth')
  </div>
@endsection


