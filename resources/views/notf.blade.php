                                                              @php
                                                                $notf = App\Models\Notification::where('order_id','!=',null)->orderBy('id','desc')->get();
                                                                if($notf->count() > 0){
                                                                  App\Models\Notification::where('order_id','!=',null)->update(['is_read' =>  1]);
                                                                }
                                                              @endphp   

                                                              @if($notf->count() > 0)
                                                            <div class="header__notification-title">
                                                                <h5>You Have a New Notification.</h5>
                                                                @if($notf->count() > 0)
                                                                <p id="notf_clear">Clear All</p>
                                                                @endif
                                                            </div>
                                                            
                                                              @foreach($notf as $notff)

                                                                <div class="notification">
                                                                    <div class="notification__img">
                                                                        <i class="fa fa-heart"></i>
                                                                    </div>
                                                                    <div class="notification__text">
                                                                        <h5><a href="{{ route('admin-order-show',$notff->order_id) }}">You have a new order.</a></h5>
                                                                        <p>{{ $notff->created_at->diffForHumans() }}</p>
                                                                    </div>
                                                                </div>
                                                              @endforeach
                                                            @else
                                                                <div class="notification">
                                                                  <h5>No New Notifications.</h5>
                                                                </div>
                                                            @endif