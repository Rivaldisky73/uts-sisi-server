namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;

class StatisticsController extends Controller
{
    public function index()
    {
        $usersWithCourses = Course::distinct('creator_id')->count('creator_id');
        $usersWithoutCourses = User::whereNotIn('id', Course::select('creator_id')->distinct())->count();
        $avgCoursesPerUser = User::withCount('enrollments')->get()->avg('enrollments_count');
        $userWithMostCourses = User::withCount('enrollments')->orderBy('enrollments_count', 'desc')->first();
        $usersWithoutEnrollments = User::doesntHave('enrollments')->get();

        return view('statistics', compact('usersWithCourses', 'usersWithoutCourses', 'avgCoursesPerUser', 'userWithMostCourses', 'usersWithoutEnrollments'));
    }
}