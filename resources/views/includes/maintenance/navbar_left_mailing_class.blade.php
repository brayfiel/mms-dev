<nav class="sidebar-nav">
    <ul class="metismenu" id="menu1">
        <li class="text-primary font-weight-bold">
            <div>
                <span class="fa fa-fw fa-square"></span> Mailing Class
            </div>
        </li>
        <li class="mm-active">
            <a href="{{url('maintenance/mailingclass/create')}}">
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
                    <a data-toggle="modal" href="#findClassCode">
                        <span class="fa fa-fw fa-search"></span> Class Code
                    </a>
                </li>
                <li>
                    <a data-toggle="modal" href="#findDescription">
                        <span class="fa fa-fw fa-search"></span> Description
                    </a>
                </li>
                <li>
                    <a href="{{url("maintenance/mailingclass/setsearch")}}">
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
                    <a href="/maintenance/mailingclass/sortorder/1">
                        <span class="fa fa-fw fa-sort"></span> Id
                    </a>
                </li>
                <li>
                    <a href="/maintenance/mailingclass/sortorder/2">
                        <span class="fa fa-fw fa-sort"></span> Class Code
                    </a>
                </li>
                <li>
                    <a href="/maintenance/mailingclass/sortorder/3">
                        <span class="fa fa-fw fa-sort"></span> Description
                    </a>
                </li>
                <li>
                    <a href="/maintenance/mailingclass/sortorder/4">
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
                    <a href="/maintenance/mailingclass/printall/id" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Id
                    </a>
                </li>
                <li>
                    <a href="/maintenance/mailingclass/printall/classcode" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Class Code
                    </a>
                </li>
                <li>
                    <a href="/maintenance/mailingclass/printall/description" target="_blank">
                        <span class="fa fa-fw fa-sort"></span> Description
                    </a>
                </li>
                <li>
                    <a href="/maintenance/mailingclass/printall/lastupdated" target="_blank">
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
            <form method="GET" action="{{url("maintenance/mailingclass/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find A Mailing Class Id</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="number"
                                class="form-control"
                                name="id"
                                placeholder="Enter A Mailing Class Id"
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

<!-- findClassCode Modal -->
<div class="modal fade" tabindex="-1" id="findClassCode" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="GET" action="{{url("maintenance/mailingclass/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find A Mailing Class Code</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="mailing_class_code"
                                maxlength="2"
                                placeholder="Enter A Mailing Class Code"
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

<!-- findDescription Modal -->
<div class="modal fade" tabindex="-1" id="findDescription" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="GET" action="{{url("maintenance/mailingclass/setsearch")}}">
                <div class="modal-header">
                    <h4 class="modal-title text-primary">Find A Mailing Class Description</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-primary">
                    <div class="row form-group">
                        <div class="offset-sm-1 col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="mailing_class_description"
                                placeholder="Enter A Mailing Class Description"
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
