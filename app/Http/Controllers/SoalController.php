<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
// use DB;
use Hash;
use App\Soal;
use App\User;
use App\Jawab;
use App\Detailsoal;
use App\Berkas;

class SoalController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  // public function index()
  // {
  //   if (auth()->user()->roles == 'USER') {
  //   // if (auth()->user()->status == 'G' or auth()->user()->status == 'A') {
  //     $user = User::where('id', auth()->user()->id)->first();
  //     // $kelas = Kelas::get();
  //     return view('siswa.index', compact('user'));
  //     // return view('siswa.index', compact('user', 'kelas'));
  //   } else {
  //     return redirect()->route('home.index');
  //   }
  // }

  // public function editSiswa(Request $request)
  // {
  //   if (auth()->user()->status == 'G' or auth()->user()->status == 'A') {
  //     $user = User::where('id', auth()->user()->id)->first();
  //     $siswa = User::where('id', $request->id)->first();
  //     $kelas = Kelas::select('id', 'nama')->get();
  //     return view('siswa.form.ubah', compact('user', 'siswa', 'kelas'));
  //   } else {
  //     return redirect()->route('home.index');
  //   }
  // }

  // public function dataSiswa()
  // {
  //   $siswas = User::where('status', 'S');
  //   if (auth()->user()->status == 'G') {
  //     return Datatables::of($siswas)
  //       ->addColumn('kelas', function ($siswas) {
  //         return 'ini kelas';
  //       })
  //       ->editColumn('jk', function ($siswas) {
  //         if ($siswas->jk == 'L') {
  //           return 'Laki-laki';
  //         } else {
  //           return 'Perempuan';
  //         }
  //       })
  //       ->addColumn('kelas', function ($siswas) {
  //         if ($siswas->getKelas) {
  //           return $siswas->getKelas->nama;
  //         } else {
  //           return "-";
  //         }
  //       })
  //       ->addColumn('action', function ($siswas) {
  //         return '<div style="text-align:center"><a href="siswa/detail/' . $siswas->id . '" class="btn btn-xs btn-success">Detail</a></div>';
  //       })
  //       ->make(true);
  //   } elseif (auth()->user()->status == 'A') {
  //     return Datatables::of($siswas)
  //       ->addColumn('kelas', function ($siswas) {
  //         return 'ini kelas';
  //       })
  //       ->editColumn('jk', function ($siswas) {
  //         if ($siswas->jk == 'L') {
  //           return 'Laki-laki';
  //         } else {
  //           return 'Perempuan';
  //         }
  //       })
  //       ->addColumn('kelas', function ($siswas) {
  //         if ($siswas->getKelas) {
  //           return $siswas->getKelas->nama;
  //         } else {
  //           return "-";
  //         }
  //       })
  //       ->addColumn('action', function ($siswas) {
  //         return '<div style="text-align:center">
  //                             <a href="siswa/edit/' . $siswas->id . '" class="btn btn-xs btn-primary">Ubah</a>
  //                             <button type="button" class="btn btn-xs btn-danger del-siswa" id="' . $siswas->id . '">Hapus</button>
  //                             <a href="siswa/detail/' . $siswas->id . '" class="btn btn-xs btn-success">Detail</a>
  //                           </div>';
  //       })
  //       ->rawColumns(['action'])
  //       ->make(true);
  //   }
  // }

  // public function detailSiswa(Request $request)
  // {
  //   if (auth()->user()->status == 'G' or auth()->user()->status == 'A') {
  //     $user = User::where('id', auth()->user()->id)->first();
  //     $siswa = User::where('id', $request->id)->first();
  //     $hasil_ujians = Jawab::join('soals', 'jawabs.soals_id', '=', 'soals.id')
  //       ->select('soals.paket', 'jawabs.*', DB::raw('SUM(jawabs.score) as jumlah_nilai'))
  //       ->where('jawabs.users_id', $siswa->id)->where('soals.users_id', auth()->user()->id)
  //       ->orderBy('jawabs.id', 'DESC')->groupBy('jawabs.soals_id')->paginate(15);
  //     return view('siswa.detail', compact('user', 'siswa', 'hasil_ujians'));
  //   } else {
  //     return redirect()->route('home.index');
  //   }
  // }

  // public function dataMateri()
  // {
  //   $materis = Materi::select("*")->where('status', 'Y');
  //   return Datatables::of($materis)
  //     ->addColumn('action', function ($materis) {
  //       if (request()->segment(1) == "siswa") {
  //         return '<div style="text-align:center"><a href="materi/detail/' . $materis->id . '" class="btn btn-xs btn-success">Detail</a></div>';
  //       } else {
  //         return '<div style="text-align:center"><a href="siswa/materi/detail/' . $materis->id . '" class="btn btn-xs btn-success">Detail</a></div>';
  //       }
  //     })
  //     ->addColumn('dibuat', function ($materis) {
  //       if ($materis->getUser) {
  //         if ($materis->getUser->jk == 'L') {
  //           $sapa = "Pak ";
  //         } else {
  //           $sapa = 'Ibu ';
  //         }
  //         return $sapa . $materis->getUser->nama;
  //       } else {
  //         return '-';
  //       }
  //     })
  //     ->make(true);
  // }

  // public function detailMateri($id)
  // {
  //   $user = User::where('id', auth()->user()->id)->first();
  //   $materi = Materi::where('id', $id)->where('status', 'Y')->first();
  //   $materi->hits = $materi->hits + 1;
  //   $materi->save();
  //   $latihan = Soal::where('materi', $materi->id)->first();
  //   return view('halaman-siswa.detail_materi', compact('user', 'materi', 'latihan'));
  // }

  // public function materi()
  // {
  //   $user = User::where('id', auth()->user()->id)->first();
  //   return view('halaman-siswa.materi', compact('user'));
  // }

  public function ujian()
  {
    $user = User::where('id', auth()->user()->id)->first();
    // $soal = Soal::query()->get();
    $soal = Soal::with(['user'])->where('tampil','aktiv')->get();
    // $check = Jawab::where('soals_id', $soal->id)->where('users_id', Auth::user()->id)->first();
    return view('pages.user.pertanyaan.index', compact('user','soal'));
    // return view('halaman-siswa.ujian', compact('user', 'pakets'));
  }

  public function detailUjian($id)
  {
    $check_soal = Soal::where('id', $id)->first();
    // $check_soal = Distribusisoal::where('soals_id', $id)->where('id_kelas', auth()->user()->id_kelas)->first();
    if ($check_soal) {
      // $soal = Soal::with('detail_soal_essays')->where('id', $id)->first();
      // $soal = Detailsoal::where('id', $id)->where('status', 'Y')->get();
      $soal = Soal::where('id', $id)->first();
      $soals = Detailsoal::where('soals_id', $id)->where('status', 'Y')->get();
      return view('pages.user.pertanyaan.detail_ujian', compact('soal','soals'));
      // return view('halaman-siswa.detail_ujian', compact('soal', 'soals'));
    } else {
      // return redirect()->route('home.index');
      return redirect()->route('pertanyaan');
    }
  }

  public function getSoal($id)
  {
    $soal = Detailsoal::find($id);
    // $cek = Detailsoal::with(['checkJawab'])->where('users_id', Auth::user()->id);
    return view('pages.user.pertanyaan.get_soal', compact('soal'));
  }

  public function jawab(Request $request)
  {
    $get_jawab = explode('/', $request->get_jawab);
    $pilihan = $get_jawab[0];
    $id_detail_soal = $get_jawab[1];
    // $id_pelamar = $get_jawab[2];
    $detail_soal = Detailsoal::find($id_detail_soal);

    $jawab = Jawab::where('no_soal_id', $id_detail_soal)->where('users_id', auth()->user()->id)->first();
    if (!$jawab) {
      $jawab = new Jawab;
      $jawab->revisi = 0;
    } else {
      $jawab->revisi = $jawab->revisi + 1;
    }

    $jawab->no_soal_id = $id_detail_soal;
    $jawab->soals_id = $detail_soal->soals_id;
    $jawab->users_id = auth()->user()->id;
    $jawab->nama = auth()->user()->name;
    $jawab->pilihan = $pilihan;

    $check_jawaban = Detailsoal::where('id', $id_detail_soal)->where('kunci', $pilihan)->first();
    if ($check_jawaban) {
      $jawab->score = $detail_soal->score;
    } else {
      $jawab->score = 0;
    }
    $jawab->status = 0;
    $jawab->save();
    return 1;
  }

  public function kirimJawaban(Request $request)
  {
    Jawab::where('soals_id', $request->soals_id)->where('users_id', auth()->user()->id)->update(['status' => 1]);
  }

  public function finishUjian($id)
  {
    $soal = Soal::find($id);
    $nilai = Jawab::where('soals_id', $id)->where('users_id', auth()->user()->id)->sum('score');
    $cek = Jawab::where('soals_id', $id)->where('users_id', auth()->user()->id)->first();
    $update = Berkas::with(['lowongan','biodata'])
                        // ->where('biodatas_id', Auth::user()->id)
                        // ->first();
                    ->whereHas('biodata', function($biodata){
                        $biodata->where('users_id', Auth::user()->id);
                    })->first();
  // if ($cek->score)
  //     {
  //       elseif ($cek >= 80)
  //       {
  //         $grade = "A";
  //         $keterangan = "LULUS";
  //       }
  //       elseif ($cek >= 70)
  //       {
  //         $grade = "B";
  //         $keterangan = "LULUS";
  //       }
  //       elseif ($cek >= 60)
  //       {
  //         $grade = "C";
  //         $keterangan = "LULUS";
  //       }
  //       else
  //       {
  //         $grade = "D";
  //         $keterangan = "TIDAK LULUS";
  //       }

  //     }


    if ($nilai != null) {
        Berkas::with(['lowongan','biodata'])
                        // ->where('biodatas_id', Auth::user()->id)
                        // ->first();
              ->whereHas('biodata', function($biodata){
                         $biodata->where('users_id', Auth::user()->id);
            })->first()->update([
            'lowongans_id' => $update->lowongan->id,
            'biodatas_id' =>$update->biodata->id,
            'status' => 'Selesei Ujian',
            // 'status' => $cek->score >= 80 = 'Lolos',
             ]);
    return view('pages.user.pertanyaan.finish', compact('soal', 'nilai','update'));

    } else {
    return view('pages.user.pertanyaan.finish', compact('soal', 'nilai','update'));
    }

    // return view('pages.user.pertanyaan.finish', compact('soal', 'nilai'));
  }

  public function delete()
  {
    return view('siswa.delete');
  }

  public function getBtnDelete($password)
  {
    $validate_admin = User::where('email', auth()->user()->email)->first();
    if ($validate_admin && Hash::check($password, $validate_admin->password)) {
      $cocok = 'Y';
    } else {
      $cocok = 'N';
    }
    return view('siswa.tombol_hapus', compact('cocok'));
  }

  public function deleteAll()
  {
    $users = User::where('status', 'S')->get();
    foreach ($users as $key => $value) {
      $jawab = Jawab::where('users_id', $value->id)->first();
      if ($jawab) {
        $jawab->delete();
      }
    }
    User::where('status', 'S')->delete();
  }
}
