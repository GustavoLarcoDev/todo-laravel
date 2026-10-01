<?php
// app/Http/Controllers/HelloController.php
namespace App\Http\Controllers;
use App\Services\Greeter;
use Illuminate\View\View;
class HelloController extends Controller
{
public function __invoke(Greeter $greeter, ?string $name = null): View
{
return view('hello', [
'greeting' => $greeter->greet($name ?? 'mundo'),
]);
}
}
