public function index()
{
$pageTitle = 'Employee List';
return view('employee.index', ['pageTitle' => $pageTitle]);
}
