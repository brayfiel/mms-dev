<nav class="sidebar-nav">
    <ul class="metismenu" id="menu1">
        <li class="text-primary font-weight-bold">
            <div>
                <span class="fa fa-fw fa-square"></span> ZIP Codes
            </div>
        </li>
        <li class="mm-active">
            <a href="{{url('maintenance/zipcode/create')}}">
                <span class="fa fa-fw fa-plus"></span> Add
            </a>
        </li>
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <span class="fa fa-fw fa-search"></span> Find
            </a>
            <ul>
                <li>
                    <a data-toggle="modal" href="#findId">
                        <span class="fa fa-fw fa-search"></span> Id
                    </a>
                </li>
                <li>
                    <a data-toggle="modal" href="#findZipCode">
                        <span class="fa fa-fw fa-search"></span> Zip Code
                    </a>
                </li>
                <li>
                    <a data-toggle="modal" href="#findCity">
                        <span class="fa fa-fw fa-search"></span> City
                    </a>
                </li>
                <li>
                    <a data-toggle="modal" href="#findState">
                        <span class="fa fa-fw fa-search"></span> State
                    </a>
                </li>
                <li>
                    <a href="{{url("maintenance/zipcode/setsearch")}}">
                        <span class="fa fa-fw fa-undo"></span> Reset
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <span class="fa fa-fw fa-sort"></span> Sort
            </a>
            <ul class="metismenu">
                <li>
                    <a href="/maintenance/zipcode/sortorder/1">
                        <span class="fa fa-fw fa-sort"></span> Id
                    </a>
                </li>
                <li>
                    <a href="/maintenance/zipcode/sortorder/2">
                        <span class="fa fa-fw fa-sort"></span> Zip Code
                    </a>
                </li>
                <li>
                    <a href="/maintenance/zipcode/sortorder/3">
                        <span class="fa fa-fw fa-sort"></span> City
                    </a>
                </li>
                <li>
                    <a href="/maintenance/zipcode/sortorder/4">
                        <span class="fa fa-fw fa-sort"></span> State
                    </a>
                </li>
                <li>
                    <a href="/maintenance/zipcode/sortorder/5">
                        <span class="fa fa-fw fa-sort"></span> Last Updated
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <span class="fa fa-fw fa-print"></span> Print
            </a>
            <ul class="metismenu">
                <li>
                    <a href="/maintenance/zipcode/printall/id" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Id
                    </a>
                </li>
                <li>
                    <a href="/maintenance/zipcode/printall/zip_code" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> ZIP Code
                    </a>
                </li>
                <li>
                    <a href="/maintenance/zipcode/printall/city" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> City
                    </a>
                </li>
                <li>
                    <a href="/maintenance/zipcode/printall/state" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> State
                    </a>
                </li>
                <li>
                    <a href="/maintenance/zipcode/printall/lastupdated" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Last Updated
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<!-- findId Modal -->
<div class="modal fade" tabindex="-1" id="findId" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="GET" action="{{url("maintenance/zipcode/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find A ZIP Code By Id</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="number"
                                class="form-control"
                                name="id"
                                placeholder="Enter An Id"
                                min="1"
                            >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-6">
                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Find">
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- findZipCode Modal -->
<div class="modal fade" tabindex="-1" id="findZipCode" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="GET" action="{{url("maintenance/zipcode/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find A ZIP Code</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="zipCode"
                                placeholder="Enter A ZIP Code"
                                maxlength = "5"
                            >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-6">
                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Find">
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- findCity Modal -->
<div class="modal fade" tabindex="-1" id="findCity" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="GET" action="{{url("maintenance/zipcode/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find A City</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="city"
                                placeholder="Enter A City"
                                maxlength="255"
                            >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-6">
                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Find">
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- findState Modal -->
<div class="modal fade" tabindex="-1" id="findState" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="GET" action="{{url("maintenance/zipcode/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find A State</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="state"
                                placeholder="Enter A State's Abbreviation"
                                maxlength="2"
                            >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-6">
                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Find">
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
