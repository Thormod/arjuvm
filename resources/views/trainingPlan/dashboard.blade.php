@extends('base')
@section('content')
<div class="main-wrapper">
   @include('layouts.navbar')
   <div class="gray-background">
   <div class="container">
            <div class="clearfix">
            <h4 class="text-uppercase text-center mt-4 mb-4">{{ $trainingPlan->name }}</h4>
            </div>
            <div class="row">
            <div class="center">
            <p>{{ $trainingPlan->short_description }}</p>
            <hr>
            </div>
            </div>

            <div id="calendar">
            <table>
            <tbody class="days_cal">
            @foreach($details->chunk(5) as $chunk)
            <tr>
            @foreach($chunk as $item) 
                <td><a href="/workout/{{ $item->workout_id }}">{{ $item->day }}</a></td>
            @endforeach 
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>

            {{-- @foreach($details->chunk(5) as $chunk)
            <ul>
                @foreach($chunk as $item)
                    Item {{ $item->day }}
                @endforeach 
            </ul>
            @endforeach --}}
        {{-- <div id="calendar">
            <table>
                <tbody class="days_cal">
                    <tr>
                        <td><a href="#" data-id="8/5/2018" onclick="return showInfo('8/5/2018')">5</a></td>
                        <td><a href="#" data-id="8/6/2018" onclick="return showInfo('8/6/2018')">6</a></td>
                        <td><a href="#" data-id="8/7/2018" onclick="return showInfo('8/7/2018')">7</a></td>
                        <td><a href="#" data-id="8/8/2018" onclick="return showInfo('8/8/2018')">8</a></td>
                        <td><a href="#" data-id="8/9/2018" onclick="return showInfo('8/9/2018')">9</a></td>
                        <td><a href="#" data-id="8/10/2018" onclick="return showInfo('8/10/2018')">10</a></td>
                        
                    </tr>
                    <tr>
                        <td><a href="#" data-id="8/5/2018" onclick="return showInfo('8/5/2018')">5</a></td>
                        <td><a href="#" data-id="8/6/2018" onclick="return showInfo('8/6/2018')">6</a></td>
                        <td><a href="#" data-id="8/7/2018" onclick="return showInfo('8/7/2018')">7</a></td>
                        <td><a href="#" data-id="8/8/2018" onclick="return showInfo('8/8/2018')">8</a></td>
                        <td><a href="#" data-id="8/9/2018" onclick="return showInfo('8/9/2018')">9</a></td>
                        <td><a href="#" data-id="8/10/2018" onclick="return showInfo('8/10/2018')">10</a></td>

                    </tr>
                    <tr>
                        <td><a href="#" data-id="8/12/2018" onclick="return showInfo('8/12/2018')">12</a></td>
                        <td><a href="#" data-id="8/13/2018" onclick="return showInfo('8/13/2018')">13</a></td>
                        <td><a href="#" data-id="8/14/2018" onclick="return showInfo('8/14/2018')">14</a></td>
                        <td><a href="#" data-id="8/15/2018" onclick="return showInfo('8/15/2018')">15</a></td>
                        <td><a href="#" data-id="8/16/2018" onclick="return showInfo('8/16/2018')">16</a></td>
                        <td><a href="#" data-id="8/17/2018" onclick="return showInfo('8/17/2018')">17</a></td>

                    </tr>
                    <tr>
                        <td><a href="#" data-id="8/19/2018" onclick="return showInfo('8/19/2018')">19</a></td>
                        <td><a href="#" data-id="8/20/2018" onclick="return showInfo('8/20/2018')">20</a></td>
                        <td><a href="#" data-id="8/21/2018" onclick="return showInfo('8/21/2018')">21</a></td>
                        <td><a href="#" data-id="8/22/2018" onclick="return showInfo('8/22/2018')">22</a></td>
                        <td><a href="#" data-id="8/23/2018" onclick="return showInfo('8/23/2018')">23</a></td>
                        <td><a href="#" data-id="8/24/2018" onclick="return showInfo('8/24/2018')">24</a></td>

                    </tr>
                    <tr>
                        <td><a href="#" data-id="8/26/2018" onclick="return showInfo('8/26/2018')">26</a></td>
                        <td><a href="#" data-id="8/27/2018" onclick="return showInfo('8/27/2018')">27</a></td>
                        <td><a href="#" data-id="8/28/2018" onclick="return showInfo('8/28/2018')">28</a></td>
                        <td><a href="#" data-id="8/29/2018" onclick="return showInfo('8/29/2018')">29</a></td>
                        <td><a href="#" data-id="8/30/2018" onclick="return showInfo('8/30/2018')">30</a></td>

                    </tr>
                </tbody>
            </table>
        </div> --}}
   </div>
   </div>
</div>


<!-- /.main-wrapper -->
@endsection