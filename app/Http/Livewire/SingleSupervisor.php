<?php

namespace App\Http\Livewire;

use App\Models\CampSupervision;
use App\Models\Company;
use App\Models\Host;
use App\Models\IfmSupervision;
use App\Models\Response;
use App\Models\Student;
use App\Models\Supervisor;
use Livewire\Component;

class SingleSupervisor extends Component
{
    public $details;
    public $supervision;
    public $unSupervised;

    public $selected = [];

    public function assign()
    {
        if (session()->get('role') == 'hod'){

            $supervisor = session()->get('supervisor')['id'];
            $faculty = session()->get('user')['faculty_id'];
            for ($i = 0; $i < count($this->selected); $i++) {
                IfmSupervision::create([
                    'supervisor_id' => $supervisor,
                    'student_id' => $this->selected[$i],
                    'faculty_id' => $faculty
                ]);
                Student::where(['id'=>$this->selected[$i]])->update([
                    'status' => "supervised",
                ]);
            }
        }

        if (session()->get('role') == 'hr'){
            $hr_id = session()->get('user')['id'];

            $company = Company::where('hr_id', $hr_id)->first();
            $supervisor = session()->get('supervisor')['id'];

            $department = Host::where('id', $supervisor)->first();

            for ($i = 0; $i < count($this->selected); $i++) {
                // host_id 	student_id 	company_id 	department_id 	
                CampSupervision::create([
                    'host_id' => $supervisor,
                    'student_id' => $this->selected[$i],
                    'company_id' => $company->id,
                    'department_id' => $department->department_id
                ]);
                Response::where(['id'=>$this->selected[$i]])->update([
                    'status' => "supervised",
                ]);
            }
        }

        $this->selected = [];

        session()->flash('assigned', '');
        return redirect('/single/'.$supervisor);
    }

    // mount the data of super visor in his profile here
    public function mount($id)
    {
        if (session()->get('role') == 'hod'){

            $hod_faculty = session()->get('user')['faculty_id'];


            $this->details = Supervisor::find($id);
    
            request()->session()->put('supervisor', $this->details);
    
            $this->supervision = IfmSupervision::where('supervisor_id', $id)->get();
    
            $this->unSupervised = Student::where(['status'=>'active','faculty_id'=>$hod_faculty])->get();
    
        }

        if (session()->get('role') == 'hr'){

            $hr_id = session()->get('user')['id'];

            $company = Company::where('hr_id', $hr_id)->first();

            $this->details = Host::find($id);
    
            request()->session()->put('supervisor', $this->details);
    
            $this->supervision = CampSupervision::where('host_id', $id)->get();
    
            $this->unSupervised = Response::where(['status'=>'Responded','company_id'=>$company->id])->get();
    
        }



    }

    public function render()
    {
        return view('livewire.single-supervisor');
    }
}
