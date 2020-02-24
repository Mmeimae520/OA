@extends('layout.chatapp')
@section('title', 'Chat')

@section('content')
<div class="section-light py-3 chat_app">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card bg-none b-none">
                    <div class="card-header bline pt-1">
                        <h3 class="card-title">Friends Group <small>Last seen: 2 hours ago</small></h3>
                        <div class="card-options">
                            <a href="javascript:void(0)" class="p-1 chat_list_btn"><i class="fa fa-align-right"></i></a>
                            <a href="javascript:void(0)" class="p-1"><i class="fa fa-plus"></i></a>
                            <a href="javascript:void(0)" class="p-1"><i class="fa fa-cog"></i></a>
                            <a href="javascript:void(0)" class="p-1"><i class="fa fa-refresh"></i></a>
                        </div>
                    </div>                        
                    <div class="chat_windows">
                        <ul class="mb-0">
                            <li class="other-message">
                                <img class="avatar mr-3" src="../assets/images/xs/avatar2.jpg" alt="avatar">
                                <div class="message">
                                    <p class="bg-light-blue">Are we meeting today?</p>
                                    <span class="time" >10:10 AM, Today</span>
                                </div>
                            </li>    
                            <li class="other-message">
                                <img class="avatar mr-3" src="../assets/images/xs/avatar3.jpg" alt="avatar">
                                <div class="message">
                                    <p class="bg-light-cyan">Hi Aiden, how are you? How is the project coming along?</p>
                                    <p class="bg-light-cyan">Are we meeting today?</p>
                                    <span class="time" >10:15 AM, Today</span>
                                </div>
                            </li>                                    
                            <li class="my-message">
                                <div class="message">
                                    <p class="bg-light-gray">Project has been already finished and I have results to show you.</p>
                                    <div class="file_folder">
                                        <a href="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="file-name">
                                                <p class="mb-0 text-muted">Report2017.xls</p>
                                                <small>Size: 68KB</small>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fa fa-file-word-o text-primary"></i>
                                            </div>
                                            <div class="file-name">
                                                <p class="mb-0 text-muted">Report2017.doc</p>
                                                <small>Size: 68KB</small>
                                            </div>
                                        </a>
                                    </div>
                                    <span class="time">10:17 AM, Today</span>
                                </div>
                            </li>
                            <li class="other-message">
                                <img class="avatar mr-3" src="../assets/images/xs/avatar4.jpg" alt="avatar">
                                <div class="message">
                                    <div class="media_img">
                                        <img src="../assets/images/gallery/1.jpg" class="w150 img-thumbnail" />
                                        <img src="../assets/images/gallery/2.jpg" class="w150 img-thumbnail" />
                                    </div>
                                    <span class="time" >10:15 AM, Today</span>
                                </div>
                            </li> 
                            <li class="other-message">
                                <span class="avatar avatar-blue mr-3">NG</span>
                                <div class="message">                                            
                                    <p class="bg-light-pink">Are we meeting today I have results?</p>
                                    <p class="bg-light-pink">Project has been already finished and to show you.</p>
                                    <span class="time" >10:18 AM, Today</span>
                                </div>
                            </li>
                            <li class="my-message">
                                <div class="message">
                                    <p class="bg-light-gray">Well we have good budget for the project</p>
                                    <span class="time">10:25 AM, Today</span>
                                </div>
                            </li>
                            <li class="my-message">
                                <div class="message">
                                    <div class="media_img">
                                        <img src="../assets/images/gallery/3.jpg" class="w100 img-thumbnail" />
                                        <img src="../assets/images/gallery/4.jpg" class="w100 img-thumbnail" />
                                        <img src="../assets/images/gallery/5.jpg" class="w100 img-thumbnail" />
                                        <img src="../assets/images/gallery/6.jpg" class="w100 img-thumbnail" />
                                    </div>
                                    <span class="time">10:25 AM, Today</span>
                                </div>
                            </li>
                        </ul>
                        <div class="chat-message clearfix">
                            <a href="javascript:void(0);"><i class="icon-camera"></i></a>
                            <a href="javascript:void(0);"><i class="icon-camcorder"></i></a>
                            <a href="javascript:void(0);"><i class="icon-paper-plane"></i></a>
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" placeholder="Enter text here...">
                            </div>
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
    <div class="chat_list section-white" id="users">
        <a href="javascript:void(0)" class="chat_list_btn float-right"><i class="fa fa-align-right"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="users-tab" data-toggle="tab" href="#users-list" role="tab" aria-controls="users-list" aria-selected="true">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="groups-tab" data-toggle="tab" href="#groups" role="tab" aria-controls="groups" aria-selected="false">Groups</a>
            </li>                    
        </ul>
        <div class="input-group mt-2 mb-2">
            <input type="text" class="form-control search" placeholder="Search...">
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="users-list" role="tabpanel" aria-labelledby="users-tab">
                <ul class="right_chat list-unstyled list">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Ava Phillip Smith</span>
                                    <span class="message">Are we meeting today?</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Debra Stewart</span>
                                    <span class="message">Project has been already</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Harry McCall</span>
                                    <span class="message">Well we have good budget</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Nancy Flanary</span>
                                    <span class="message">i'm meeting today</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Marshall Nichols</span>
                                    <span class="message">I have results to show you</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Debra Stewart</span>
                                    <span class="message">How is the project coming</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Harry McCall</span>
                                    <span class="message">Well we have good budget</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Harry McCall</span>
                                    <span class="message">Are we meeting today?</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Nancy Flanary</span>
                                    <span class="message">Hi Suse, how are you?</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Debra Stewart</span>
                                    <span class="message">Hi Aiden, how are you?</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                        <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Nancy Flanary</span>
                                    <span class="message">I have results to show you</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Marshall Nichols</span>
                                    <span class="message">Well we have good budget</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Debra Stewart</span>
                                    <span class="message">Hi Aiden, how are you?</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Harry McCall</span>
                                    <span class="message">I have results to show you</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="groups" role="tabpanel" aria-labelledby="groups-tab">
                <ul class="right_chat list-unstyled list">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">PHP Groups</span>
                                    <span class="message">How is the project coming</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Family Groups</span>
                                    <span class="message">Update Code</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Harry McCall</span>
                                    <span class="message">3 New design bug</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Friends holic</span>
                                    <span class="message">Hello All!</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">CL City 2</span>
                                    <span class="message">Add new contact</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop
