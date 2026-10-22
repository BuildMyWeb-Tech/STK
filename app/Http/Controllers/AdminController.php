<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Feedback;
use App\Models\Registration;
use App\Models\Testmonial;
use App\Models\Upcoming_event;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AdminController extends Controller
{
    public function dashboard()
    {
        $records = Upcoming_event::all();
        if ($records->count() > 0) {
            $registration = Registration::where('upcoming_events_id', $records[0]->id)->get();
        } else {
            $registration = Registration::all();
        }

        $feedback = Feedback::all();
        return view('admin.dashboard', compact('records', 'registration', 'feedback'));
    }

    public function registration()
    {
        $records = Registration::with('upcoming_event')->orderBy('id', 'desc')->paginate(10);
        return view('admin.registration.registration', compact('records'));
    }

    public function payment()
    {
        return view('admin.payment.payment');
    }
    public function feedback()
    {
        $records = Feedback::with('past_events')->orderBy('id', 'desc')->paginate(10);
        return view('admin.feedback.feedback', compact('records'));
    }
    public function contact()
    {
        $records = Contact::orderBy('id', 'desc')->paginate(10);
        return view('admin.contact.contact', compact('records'));
    }

    // public function feedback_approve($id)
    // {
    //     $record = Feedback::find($id);
    //     $record->status = 2;
    //     $record->save();
    //     return redirect()->back()->with('success', 'Feedback approved successfully');
    // }
    public function feedback_delete($id)
    {
        $record = Feedback::find($id);
        if ($record) {
            $record->delete();
        }
        // $record->status = 0;
        // $record->save();
        return redirect()->back()->with('success', 'Feedback Deleted successfully');
    }
    public function contact_respond($id)
    {
        $record = Contact::find($id);
        $record->status = 2;
        $record->save();
        return redirect()->back()->with('success', 'Contact Respond successfully');
    }
    public function contact_delete($id)
    {
        $record = Contact::find($id);
        $record->delete();
        return redirect()->back()->with('success', 'Contact deleted successfully');
    }

    public function downloadRegistrations()
    {
        $registrations = Registration::with('upcoming_event')->get();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('E1', 'Registration Details');

        // Merge cells A1 to C1 to center the heading
        $sheet->mergeCells('E1:G1');

        // Bold and center the heading
        $sheet->getStyle('E1')->getFont()->setBold(true)->setSize(16);
        $sheet->getStyle('E1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);


        $sheet->setCellValue('B2', 'Sl No')
            ->setCellValue('C2', 'Name')
            ->setCellValue('D2', 'Event Name')
            ->setCellValue('E2', 'Phone')
            ->setCellValue('F2', 'Adults')
            ->setCellValue('G2', 'Fulltime Students')
            ->setCellValue('H2', 'Young Adults')
            ->setCellValue('I2', 'Kids')
            ->setCellValue('J2', 'Young Kids')
            ->setCellValue('K2', 'Food Preference')
            ->setCellValue('L2', 'Payment');



        $sheet->getColumnDimension('B')->setWidth(10);
        $sheet->getColumnDimension('C')->setWidth(25);
        $sheet->getColumnDimension('D')->setWidth(30);
        $sheet->getColumnDimension('E')->setWidth(20);
        $sheet->getColumnDimension('F')->setWidth(20);
        $sheet->getColumnDimension('G')->setWidth(20);
        $sheet->getColumnDimension('H')->setWidth(20);
        $sheet->getColumnDimension('I')->setWidth(20);
        $sheet->getColumnDimension('J')->setWidth(20);
        $sheet->getColumnDimension('K')->setWidth(20);
        $sheet->getColumnDimension('L')->setWidth(20);


        // Bold and center-align the header cells (row 2)
        $sheet->getStyle('B2:L2')->getFont()->setBold(true);
        $sheet->getStyle('B2:L2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);



        $row = 3;
        $no = 1;
        foreach ($registrations as $registration) {
            $sheet->setCellValue('B' . $row, $no)
                ->setCellValue('C' . $row, $registration->first_name . ' ' . $registration->last_name)
                ->setCellValue('D' . $row, $registration->upcoming_event->event_name)
                ->setCellValue('E' . $row, $registration->phone)
                ->setCellValue('F' . $row, (int)$registration->adults)
                ->setCellValue('G' . $row, (int)$registration->full_time_students)
                ->setCellValue('H' . $row, (int)$registration->young_adults)
                ->setCellValue('I' . $row, (int)$registration->kids)
                ->setCellValue('J' . $row, (int)$registration->young_kids)
                ->setCellValue('K' . $row, $registration->food_choice)
                ->setCellValue('L' . $row, (int)$registration->total);
            $sheet->getStyle('B' . $row . ':L' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $row++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'Registrations.xlsx';
        $writer->save($fileName);

        return response()->download($fileName)->deleteFileAfterSend(true);
    }

    public function testmonials()
    {

        $records = Testmonial::orderBy('id', 'desc')->paginate(10);
        return view('admin.testmonials.testmonials', compact('records'));
    }

    public function testmonials_approve($id)
    {
        $testmonial = Testmonial::find($id);
        if ($testmonial) {
            $testmonial->status = 1;
            $testmonial->save();
        }
        return redirect()->back()->with('success', 'Testmonial approved successfully');
    }

    public function testmonials_delete($id)
    {
        $testmonial = Testmonial::find($id);
        if ($testmonial) {
            $testmonial->delete();
        }
        return redirect()->back()->with('success', 'Testmonial deleted successfully');
    }

    public function downloadFeedback()
    {
        $registrations = Feedback::with('past_events')->get();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('E1', 'Feedback Details');

        // Merge cells A1 to C1 to center the heading
        $sheet->mergeCells('E1:G1');

        // Bold and center the heading
        $sheet->getStyle('E1')->getFont()->setBold(true)->setSize(16);
        $sheet->getStyle('E1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);


        $sheet->setCellValue('B2', 'Sl No')
            ->setCellValue('C2', 'Past Event')
            ->setCellValue('D2', 'Question1')
            ->setCellValue('E2', 'Question2')
            ->setCellValue('F2', 'Question3')
            ->setCellValue('G2', 'Question4')
            ->setCellValue('H2', 'Question5')
            ->setCellValue('I2', 'Question6')
            ->setCellValue('J2', 'Question7')
            ->setCellValue('K2', 'Question8')
            ->setCellValue('L2', 'Question9')
            ->setCellValue('M2', 'Question10')
            ->setCellValue('N2', 'Question11')
            ->setCellValue('O2', 'Question12');



        $sheet->getColumnDimension('B')->setWidth(10);
        $sheet->getColumnDimension('C')->setWidth(25);
        $sheet->getColumnDimension('D')->setWidth(30);
        $sheet->getColumnDimension('E')->setWidth(20);
        $sheet->getColumnDimension('F')->setWidth(20);
        $sheet->getColumnDimension('G')->setWidth(20);
        $sheet->getColumnDimension('H')->setWidth(20);
        $sheet->getColumnDimension('I')->setWidth(20);
        $sheet->getColumnDimension('J')->setWidth(20);
        $sheet->getColumnDimension('K')->setWidth(20);
        $sheet->getColumnDimension('L')->setWidth(20);
        $sheet->getColumnDimension('M')->setWidth(20);
        $sheet->getColumnDimension('N')->setWidth(20);
        $sheet->getColumnDimension('O')->setWidth(20);


        // Bold and center-align the header cells (row 2)
        $sheet->getStyle('B2:O2')->getFont()->setBold(true);
        $sheet->getStyle('B2:O2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);



        $row = 3;
        $no = 1;
        foreach ($registrations as $registration) {
            $sheet->setCellValue('B' . $row, $no)
                ->setCellValue('C' . $row, $registration->past_events->event_name)
                ->setCellValue('D' . $row, $registration->past_events->question1 . "\n" .
                    $registration->question1)
                ->setCellValue('E' . $row, $registration->past_events->question2 . "\n" .
                    $registration->question2)
                ->setCellValue('F' . $row, $registration->past_events->question3 . "\n" .
                    $registration->question3)
                ->setCellValue('G' . $row, $registration->past_events->question4 . "\n" .
                    $registration->question4)
                ->setCellValue('H' . $row, $registration->past_events->question5 . "\n" .
                    $registration->question5)
                ->setCellValue('I' . $row, $registration->past_events->question6 . "\n" .
                    $registration->question6)
                ->setCellValue('J' . $row, $registration->past_events->question7 . "\n" .
                    $registration->question7)
                ->setCellValue('K' . $row, $registration->past_events->question8 . "\n" .
                    $registration->question8)
                ->setCellValue('L' . $row, $registration->past_events->question9 . "\n" .
                    $registration->question9)
                ->setCellValue('M' . $row, $registration->past_events->question10 . "\n" .
                    $registration->question10)
                ->setCellValue('N' . $row, "What were the highlights of this event ? You may wish
to tell us about the positive aspects.
" . "\n" .
                    $registration->question11)
                ->setCellValue('O' . $row, "How can we improve future events ? You may wish to
share areas that need improvement." . "\n" .
                    $registration->question12);
            $sheet->getStyle('D' . $row)->getAlignment()->setWrapText(true);
            $sheet->getStyle('E' . $row)->getAlignment()->setWrapText(true);
            $sheet->getStyle('F' . $row)->getAlignment()->setWrapText(true);
            $sheet->getStyle('G' . $row)->getAlignment()->setWrapText(true);
            $sheet->getStyle('H' . $row)->getAlignment()->setWrapText(true);
            $sheet->getStyle('I' . $row)->getAlignment()->setWrapText(true);
            $sheet->getStyle('J' . $row)->getAlignment()->setWrapText(true);
            $sheet->getStyle('K' . $row)->getAlignment()->setWrapText(true);
            $sheet->getStyle('L' . $row)->getAlignment()->setWrapText(true);
            $sheet->getStyle('M' . $row)->getAlignment()->setWrapText(true);
            $sheet->getStyle('N' . $row)->getAlignment()->setWrapText(true);
            $sheet->getStyle('O' . $row)->getAlignment()->setWrapText(true);

            $sheet->getStyle('B' . $row . ':O' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $row++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'Feedback.xlsx';
        $writer->save($fileName);

        return response()->download($fileName)->deleteFileAfterSend(true);
    }

    public function DeleteRegistration($id)
    {
        $del = Registration::find($id);
        if ($del) {
            $del->delete();
        }
        return redirect()->back()->with("success", "Registration Successfully Deleted!");
    }
}
