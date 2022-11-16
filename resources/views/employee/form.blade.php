@csrf

<div class="mb-3">
    <label for="employeeFirstName" class="form-label">First Name</label>
    <input type="text" name="first_name" class="form-control" id="employeeFirstName"
        value="{{ old('first_name') ?? $employee->first_name }}">
    <div class="form-text text-danger">{{ $errors->first('first_name') }}</div>
</div>

<div class="mb-3">
    <label for="employeeLastName" class="form-label">Last Name</label>
    <input type="text" name="last_name" class="form-control" id="employeeLastName"
        value="{{ old('last_name') ?? $employee->last_name }}">
    <div class="form-text text-danger">{{ $errors->first('last_name') }}</div>
</div>

<div class="mb-3">
    <label for="employeeEmail" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="employeeEmail"
        value="{{ old('email') ?? $employee->email }}">
    <div class="form-text text-danger">{{ $errors->first('email') }}</div>
</div>

<div class="mb-3">
    <label for="employeePhone" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="employeePhone"
        value="{{ old('phone') ?? $employee->phone }}">
    <div class="form-text text-danger">{{ $errors->first('phone') }}</div>
</div>

<div class="mb-3">
    <label for="employeeCompany" class="form-label">Company</label>
    <select class="form-select" name="company_id" id="employeeCompany">
        @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
    </select>
    
    <div class="form-text text-danger">{{ $errors->first('company_id') }}</div>
</div>
