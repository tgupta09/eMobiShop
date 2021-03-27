@extends('layout')

@section('title','MCP Login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-lg-6" style="margin:150px 0px;">
            <h1 class="text-center">MCP Login</h1>
            <div id="mcpinvaliderrdiv"></div>
            <div id="mcpformerr"></div>
            <form class="p-5" style="border:2px solid black;">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-append">
                      <span class="input-group-text">Email</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Your Email" id="mcpemailid" name="email">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                      <span class="input-group-text">Password</span>
                    </div>
                    <input type="password" class="form-control" placeholder="Your Password" id="mcppasswordid" name="password">
                </div>
                <button type="button" class="btn btn-success btn-block" id="mcploginbtnid">Login</button>
            </form>
        </div>
    </div>
@endsection