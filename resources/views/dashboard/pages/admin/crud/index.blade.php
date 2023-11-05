
@extends('dashboard.layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div style="margin-top: 100px;">
        <div class="card rounded-none">
            <div class="card-header pt-3 pb-1 d-flex justify-content-between align-items-center">
                <div><h4 class="" style="font-size: 22px !important;">All Blogs</h4></div>
                <div class="d-flex justify-content-between">
                    <!-- <label class="switch">
                        <input v-if="data.is_visible" type="checkbox" @change="toggle" checked="">
                        <input v-else type="checkbox" @change="toggle">
                        <span class="switch-state" style="background-color: #4c6887;"></span>
                    </label> -->
                    <div class="ps-3 d-flex gap-2"><a href="#/admin/blog/category" class="btn btn-sm btn-info"> All Category </a><a href="#/admin/blog/create" class="btn btn-sm btn-info"> Create </a></div>
                </div>
            </div>
            <div class="card-body px-4 py-2 form_area custom_scroll">
                <div class="custom_table nowrap table-responsive w-100 h-100 custom_scroll">
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-start" style="width: 5px;"><input type="checkbox" /></th>
                                <th class="text-start" style="width: 50px;">Sl</th>
                                <th class="text-start" style="width: 400px;">Title</th>
                                <th class="text-start" style="width: 400px;">Catgory Name</th>
                                <th style="width: 200px;">Date</th>
                                <th style="width: 200px;">Status</th>
                                <th class="text-center" style="width: 200px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">1</td>
                                <td class="text-start">Future of ICT</td>
                                <td class="text-start">Ict</td>
                                <td class="">10/15/2023, 10:06:44 PM</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/blog/edit/1" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">2</td>
                                <td class="text-start">Technology of educational tools</td>
                                <td class="text-start">Parenting and Education</td>
                                <td class="">10/15/2023, 10:06:44 PM</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/blog/edit/2" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">3</td>
                                <td class="text-start">Student Success and Well-being</td>
                                <td class="text-start">Student Success</td>
                                <td class="">10/15/2023, 10:06:44 PM</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/blog/edit/3" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">4</td>
                                <td class="text-start">Career and College Guidance</td>
                                <td class="text-start">Career</td>
                                <td class="">10/15/2023, 10:06:44 PM</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/blog/edit/4" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start"><input type="checkbox" name="" id="" /></td>
                                <td class="text-start">5</td>
                                <td class="text-start">Education Policy and Advocacy</td>
                                <td class="text-start">Education</td>
                                <td class="">10/15/2023, 10:06:44 PM</td>
                                <td><p class="badge badge-success">active</p></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-3"><a href="#/admin/blog/edit/5" class="btn btn-sm btn-outline-info"> Edit </a><a href="#" class="btn btn-sm btn-outline-danger"> delete </a></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-2">
                <nav aria-label="Page navigation example" class="">
                    <ul class="pagination pagination-warning">
                        <li class="page-item">
                            <a class="page-link"><span>« Previous</span></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="http://127.0.0.1:8000/api/v1/navbar-menu-details/all?orderByType=DESC&amp;sub_menu_slug=vrti-notis-82634719&amp;page=1"><span>1</span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link"><span>Next »</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

