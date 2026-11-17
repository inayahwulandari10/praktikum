public function show($id)
{
$jurusan = Jurusan::findOrFail($id);

return view('jurusan.show', compact('jurusan'));
}