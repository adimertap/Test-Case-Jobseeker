@extends('layouts')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container-fluid">
    <div class="alert alert-primary mt-2" role="alert">
        <h4 class="alert-heading">I Putu Adi Merta Pratama</h4>
        <p>Test Case 1 CRUD Candidate with Ajax, you can create candidate on button below.</p>
        <hr>
        <div class="row">
            <div class="col-auto">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCreate">
                    Create Candidate
                </button>
            </div>
            <div class="col">
                <a href="{{ route('landing') }}" class="btn btn-info" >
                    Landing Page
                </a>
            </div>
        </div>
        
    </div>
    
    <div class="card mt-2">
        <div class="card-header">List Candidate</div>
        <div class="card-body">
    
            <table id="example" class="table table-striped table-bordered data-table" style="width:100%">
                <thead>
                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20px;">
                            No</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">Full Name</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 70px;">Date of Birth</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 80px;">Place of Birth</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 60px;">Gender</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 40px;">Years Experience</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 90px;">Last Salary</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 60px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-soft-primary">
                <h5 class="modal-title" id="ModalHeading">Create Candidate</h5>
                <button type="button" id="CreateClose" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form-create">
                    @csrf
                    <label class="mb-1">Complete Form Below</label>
                    <div class="form-group mt-2">
                        <label class="mb-1 mr-1" for="full_name">Full Name</label><span class="mr-4 mb-3" style="color: red">*</span>
                        <input class="form-control" name="full_name" type="text" id="full_name" placeholder="Input Your Full Name" value="{{ old('full_name') }}" required>
                    </div>
                    <div class="row mt-2">
                        <div class="col-7">
                            <div class="form-group">
                                <label class="mb-1 mr-1" for="pob">Place of Birth</label><span class="mr-4 mb-3" style="color: red">*</span>
                                <input class="form-control" name="pob" type="text" id="pob" placeholder="Input Your Place of Birth" value="{{ old('pob') }}" required>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label class="mb-1 mr-1" for="dob">Date of Birth</label><span class="mr-4 mb-3" style="color: red">*</span>
                                <input class="form-control" name="dob" type="date" id="dob" placeholder="Input Your Date of Birth" value="{{ old('dob') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label class="mb-1 mr-1" for="gender">Gender</label><span class="mr-4 mb-3" style="color: red">*</span>
                        <select name="gender" id="gender" class="form-control">
                            <option value="{{ old('gender')}}">Select Gender</option>
                            <option value="F">Female</option>
                            <option value="M">Male</option>
                        </select>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5">
                            <div class="form-group">
                                <label class="mb-1 mr-1" for="year_exp">Years of Experience</label><span class="mr-4 mb-3" style="color: red">*</span>
                                <input class="form-control" name="year_exp" type="number" id="year_exp" placeholder="Input Years of Experience" value="{{ old('year_exp') }}" required>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                                <label class="mb-1 mr-1" for="last_salary">Last Salary</label><span class="mr-4 mb-3" style="color: red">*</span>
                                <input class="form-control" name="last_salary" type="text" id="last_salary" placeholder="Input Your Last Salary" value="{{ old('last_salary') }}" required>
                            </div>
                            <p class="text-primary small"> Detail in IDR:
                                <span class="detailidr"></span>
                            </p>
                        </div>
                    </div>
                    <p class="text-danger small"> (*) field required
                    </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="BtnSave" name="BtnSave" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </form>
    </div>
</div>

<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-soft-primary">
                <h5 class="modal-title" id="ModalHeading">Edit Candidate</h5>
                <button type="button" id="EditClose" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form-edit">
                    @csrf
                    <label class="mb-1">Complete Form Below</label>
                    <input type="hidden" name="candidate_id" id="candidate_id">
                    <div class="form-group mt-2">
                        <label class="mb-1 mr-1" for="full_name">Full Name</label><span class="mr-4 mb-3" style="color: red">*</span>
                        <input class="form-control" name="full_name" type="text" id="edit_full_name" placeholder="Input Your Full Name" value="{{ old('full_name') }}" required>
                    </div>
                    <div class="row mt-2">
                        <div class="col-7">
                            <div class="form-group">
                                <label class="mb-1 mr-1" for="pob">Place of Birth</label><span class="mr-4 mb-3" style="color: red">*</span>
                                <input class="form-control" name="pob" type="text" id="edit_pob" placeholder="Input Your Place of Birth" value="{{ old('pob') }}" required>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label class="mb-1 mr-1" for="dob">Date of Birth</label><span class="mr-4 mb-3" style="color: red">*</span>
                                <input class="form-control" name="dob" type="date" id="edit_dob" placeholder="Input Your Date of Birth" value="{{ old('dob') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label class="mb-1 mr-1" for="gender">Gender</label><span class="mr-4 mb-3" style="color: red">*</span>
                        <select name="gender" id="edit_gender" class="form-control">
                            <option value="{{ old('gender')}}">Select Gender</option>
                            <option value="F">Female</option>
                            <option value="M">Male</option>
                        </select>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5">
                            <div class="form-group">
                                <label class="mb-1 mr-1" for="year_exp">Years of Experience</label><span class="mr-4 mb-3" style="color: red">*</span>
                                <input class="form-control" name="year_exp" type="number" id="edit_year_exp" placeholder="Input Years of Experience" value="{{ old('year_exp') }}" required>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                                <label class="mb-1 mr-1" for="last_salary">Last Salary</label><span class="mr-4 mb-3" style="color: red">*</span>
                                <input class="form-control" name="last_salary" type="text" id="edit_last_salary" placeholder="Input Your Last Salary" value="{{ old('last_salary') }}" required>
                            </div>
                            <p class="text-primary small"> Detail in IDR:
                                <span class="editdetailidr"></span>
                            </p>
                        </div>
                    </div>
                    <p class="text-danger small"> (*) field required
                    </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="BtnUpdate" name="BtnUpdate" class="btn btn-primary">Update Data</button>
            </div>
        </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $('#ModalCreate').on('shown.bs.modal', function() {
        $('#ModalCreate').trigger('focus')
    })

    $(document).ready(function() {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
        // FETCH DATA
        var table = $('.data-table').DataTable({
            processing: true
            , serverSide: true
            , ajax: "{{ route('candidate.index') }}"
            , columns: [{
                    data: 'DT_RowIndex'
                    , name: 'DT_RowIndex'
                    , orderable: false
                    , searchable: false
                }
                , {
                    data: 'full_name'
                    , name: 'full_name'
                }
                , {
                    data: 'dob'
                    , name: 'dob'
                }
                , {
                    data: 'pob'
                    , name: 'pob'
                }
                , {
                    data: 'gender'
                    , name: 'gender'
                }
                , {
                    data: 'year_exp'
                    , name: 'year_exp'
                }
                , {
                    data: 'last_salary'
                    , name: 'last_salary'
                }
                , {
                    data: 'action'
                    , name: 'action'
                    , orderable: false
                    , searchable: false
                }
            , ]
        });

        // SAVE CANDIDATE
        $('#BtnSave').click(function(e) {
            e.preventDefault();
            $(this).html('Saving...');

            $.ajax({
                data: $('#form-create').serialize()
                , url: "{{ route('candidate.store') }}"
                , type: "POST"
                , dataType: 'json'
                , success: function(data) {
                    $('#form-create').trigger("reset");
                    $('#CreateClose').click();
                    $('.detailidr').html("0");
                    table.draw();
                    $('#BtnSave').html('Save changes');

                }
                , error: function(err) {
                    if (err.status == 422) {
                        $('#success_message').fadeIn().html(err.responseJSON.message);
                        $.each(err.responseJSON.errors, function(i, error) {
                            var el = $(document).find('[name="' + i + '"]');
                            el.after($('<span style="color: red;font-size: 12px">' + error[0] + '</span>'));
                        });
                        $('#BtnSave').html('Save changes');

                        console.log(err);
                    }
                }
            });
        });

        // UPDATE CANDIDATE
        $('body').on('click', '.editCandidate', function() {
            var id_candidate = $(this).data('id');

            $.get("{{ url('candidate/') }}" + '/' + id_candidate + '/edit', function(data) {
                $('#ModalUpdate').modal('show');

                $('#candidate_id').val(id_candidate)
                $('#edit_full_name').val(data.full_name);
                $('#edit_dob').val(data.dob);
                $('#edit_pob').val(data.pob);
                $('#edit_gender').val(data.gender);
                $('#edit_year_exp').val(data.year_exp);
                $('#edit_last_salary').val(data.last_salary);
                var last = data.last_salary;
                var nominal_idr = new Intl.NumberFormat('id', {
                    style: 'currency'
                    , currency: 'IDR'
                    , minimumFractionDigits: 0
                , }).format(last)
                $('.editdetailidr').html(nominal_idr)
            })

            $('#BtnUpdate').click(function(e) {
                e.preventDefault();
                $(this).html('Update...');

                $.ajax({
                    data: $('#form-edit').serialize()
                    , url: "/candidate/" + id_candidate
                    , type: "PUT"
                    , dataType: 'json'
                    , success: function(data) {
                        $('#ModalUpdate').modal('hide');
                        table.draw();
                        $('#BtnUpdate').html('Update Data');

                    }
                    , error: function(err) {
                        if (err.status == 422) {
                            $('#success_message').fadeIn().html(err.responseJSON.message);
                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $(document).find('[name="' + i + '"]');
                                el.after($('<span style="color: red;font-size: 12px">' + error[0] + '</span>'));
                            });
                            $('#BtnUpdate').html('Update Data');

                            console.log(err);
                        }
                    }
                });

            });

        });

        // DELETE CANDIDATE
        $('body').on('click', '.deleteCandidate', function() {

            var id_candidate = $(this).data('id');

            if (confirm("Are You sure want to delete !"))

            {
                $.ajax({
                    type: "DELETE"
                    , url: "/candidate/" + id_candidate
                    , success: function(data) {
                        alert("Candidate is deleted");
                        table.draw();
                    }
                    , error: function(data) {
                        console.log('Error:', data);
                    }
                });
            }
        });


        // DETAIL IDR
        $('#last_salary').each(function() {
            $(this).on('input', function() {
                var nominal = $(this).val()
                var nominal_idr = new Intl.NumberFormat('id', {
                    style: 'currency'
                    , currency: 'IDR'
                    , minimumFractionDigits: 0
                , }).format(nominal)

                var nominal_template = $(this).parent().parent().parent().find('.detailidr')
                $(nominal_template).html(nominal_idr);
            })
        });
    });

</script>



@endsection
