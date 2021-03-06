@extends('frontEnd.master');
@section('title')
    HOMEEEEEEEEEEE
@endsection
@section('content')
    <div class="content">
        <div class="content_resize">
            <div class="mainbar">
                <div class="article">

                    <hr/>
                        <table border="1">
                            <tr>
                                <td>Student Id</td>
                                <td>Student Name</td>
                                <td>Student Email</td>
                                <td>Student Mobile</td>
                                <td>Action</td>
                            </tr>
                            @foreach($allStudents as $allStudent)
                            <tr>
                                <td>{{ $allStudent->id }}</td>
                                <td>{{ $allStudent->name }}</td>
                                <td>{{ $allStudent->email }}</td>
                                <td>{{ $allStudent->mobile }}</td>
                                <td>
                                    <a href="{{ url('/edit-student/'.$allStudent->id) }}">Edit</a> ||
                                    <a href="{{ url('/delete-student/'.$allStudent->id) }}" onclick="confirm('Are you sure to delete this !!');">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    <hr/>

                    <p class="infopost">Posted on <span class="date">11 sep 2018</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments <span>11</span></a></p>
                    <div class="clr"></div>
                    <div class="img"><img src="images/img1.jpg" width="177" height="213" alt="" class="fl" /></div>
                    <div class="post_content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. <a href="#">Suspendisse bibendum. Cras id urna.</a> Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</p>
                        <p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla.</strong> Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
                        <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="article">
                    <h2><span>We'll Make Sure Template</span> Works For You</h2>
                    <p class="infopost">Posted on <span class="date">29 aug 2016</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments <span>7</span></a></p>
                    <div class="clr"></div>
                    <div class="img"><img src="images/img2.jpg" width="177" height="213" alt="" class="fl" /></div>
                    <div class="post_content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</a> Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam.</p>
                        <p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla.</strong> Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
                        <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
                    </div>
                    <div class="clr"></div>
                </div>
                <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
            </div>
            <div class="sidebar">
                <div class="searchform">
                    <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
                        <input name="button_search" src="images/search.gif" class="button_search" type="image" />
                    </form>
                </div>
                <div class="clr"></div>
                <div class="gadget">
                    <h2 class="star"><span>Sidebar</span> Menu</h2>
                    <div class="clr"></div>
                    <ul class="sb_menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">TemplateInfo</a></li>
                        <li><a href="#">Style Demo</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Archives</a></li>
                        <li><a href="#">Web Templates</a></li>
                    </ul>
                </div>
                <div class="gadget">
                    <h2 class="star"><span>Sponsors</span></h2>
                    <div class="clr"></div>
                    <ul class="ex_menu">
                        <li><a href="http://www.dreamtemplate.com/">DreamTemplate</a><br />
                            Over 6,000+ Premium Web Templates</li>
                        <li><a href="http://www.templatesold.com/">TemplateSOLD</a><br />
                            Premium WordPress &amp; Joomla Themes</li>
                        <li><a href="http://www.imhosted.com/">ImHosted.com</a><br />
                            Affordable Web Hosting Provider</li>
                        <li><a href="http://www.megastockphotos.com/">MegaStockPhotos</a><br />
                            Unlimited Amazing Stock Photos</li>
                        <li><a href="http://www.evrsoft.com/">Evrsoft</a><br />
                            Website Builder Software &amp; Tools</li>
                        <li><a href="http://www.csshub.com/">CSS Hub</a><br />
                            Premium CSS Templates</li>
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
@endsection