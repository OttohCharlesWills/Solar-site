<div class="row">

<div class="col-md-6 mb-3">

<label>Business Name</label>

<input type="text"
name="business_name"
class="form-control"
value="{{ old('business_name',$job->business_name ?? '') }}">

</div>

<div class="col-md-6 mb-3">

<label>Client Name *</label>

<input type="text"
name="client_name"
class="form-control"
required
value="{{ old('client_name',$job->client_name ?? '') }}">

</div>

<div class="col-md-6 mb-3">

<label>Client Phone</label>

<input type="text"
name="phone"
class="form-control"
value="{{ old('phone',$job->phone ?? '') }}">

</div>

<div class="col-md-6 mb-3">

<label>Client Email</label>

<input type="email"
name="email"
class="form-control"
value="{{ old('email',$job->email ?? '') }}">

</div>

<div class="col-md-6 mb-3">

<label>Location *</label>

<input type="text"
name="location"
class="form-control"
required
value="{{ old('location',$job->location ?? '') }}">

</div>

<div class="col-md-6 mb-3">

<label>Service Type</label>

<select name="service_type"
class="form-select">

<option>CCTV Installation</option>

<option>Fibre Optics</option>

<option>Network Infrastructure</option>

<option>Access Control</option>

<option>Biometric System</option>

<option>Solar Installation</option>

<option>Maintenance</option>

<option>ICT Consultancy</option>

<option>Software Development</option>

</select>

</div>

<div class="col-md-12 mb-3">

<label>Description</label>

<textarea
name="description"
rows="5"
class="form-control">{{ old('description',$job->description ?? '') }}</textarea>

</div>

<div class="col-md-4 mb-3">

<label>Progress</label>

<select name="progress"
class="form-select">

<option>Pending</option>

<option>Planning</option>

<option>Installation</option>

<option>Testing</option>

<option>Completed</option>

<option>Maintenance</option>

</select>

</div>

<div class="col-md-4 mb-3">

<label>Status</label>

<select name="status"
class="form-select">

<option>Active</option>

<option>Completed</option>

<option>On Hold</option>

<option>Cancelled</option>

</select>

</div>

<div class="col-md-4 mb-3">

<label>Assigned To</label>

<input type="text"
name="assigned_to"
class="form-control"
value="{{ old('assigned_to',$job->assigned_to ?? '') }}">

</div>

<div class="col-md-4 mb-3">

<label>Start Date</label>

<input type="date"
name="start_date"
class="form-control"
value="{{ old('start_date',$job->start_date ?? '') }}">

</div>

<div class="col-md-4 mb-3">

<label>Completion Date</label>

<input type="date"
name="completion_date"
class="form-control"
value="{{ old('completion_date',$job->completion_date ?? '') }}">

</div>

<div class="col-md-4 mb-3">

<label>Project Value (₦)</label>

<input type="number"
step="0.01"
name="amount"
class="form-control"
value="{{ old('amount',$job->amount ?? '') }}">

</div>

</div>