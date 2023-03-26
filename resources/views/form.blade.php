<form action="" method="POST" style="text-align: center; margin-top: 50px" >
	@csrf
	<label> Keyword</label>
    <input type="text" name="keyword" placeholder="Enter Keyword" required> <br><br>
	<label> From </label>
	<input type="date" name="dateFrom" required><br><br>
	<label> To </label>
	<input type="date" name="dateTo" required><br>
	<input type="submit" value="Apply">
</form>
