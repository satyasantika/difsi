<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\FormItem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Form::create([
                    'code' => 'sensori',
                    'name' => 'preferensi sensori',
                    'type' => 'skor_1',
                    'count' => 48,
                ]);
        $items = [
            [1,'V01','Saya mencatat rumus matematika dengan memberikan tanda garis bawah supaya mudah dibaca',1],
            [1,'V02','Saya selalu menyimpan kembali buku dan alat tulis pada tempatnya setelah selesai belajar',1],
            [1,'V03','Saya lebih suka membaca buku cerita dari pada Belajar Matematika',1],
            [1,'V04','Menjelang ulangan Matematika, saya membaca materi yang sangat banyak dalam waktu lama',1],
            [1,'V05','Saya memakai seragam sekolah dengan rapi',1],
            [1,'V06','Saya lebih rajin belajar supaya mencapai prestasi tinggi',1],
            [1,'V07','Saya membaca dengan detail petunjuk kerja Pengerjaan soal matematika',1],
            [1,'V08','Saya sering lupa jika hanya mendengarkan perintah tugas dari guru tanpa menuliskannya',1],
            [1,'V09','Saya lebih suka membaca cerita daripada mendengarkan cerita',1],
            [1,'V10','Untuk menghapalkan materi matematika, saya lebih mudah dengan membacanya sendiri',1],
            [1,'V11','Saya mengingat dengan baik rumus matematika yang dituliskan guru di papan tulis',1],
            [1,'V12','Sebelum UAS matematika, saya membaca sekilas materi secara keseluruhan',1],
            [1,'V13','Saya bisa membaca dengan baik meskipun terdengar asyik teman sedang bermain',1],
            [1,'V14','Saya senang belajar dengan mengamati peta konsep',1],
            [1,'V15','Saya kesulitan memahami materi pelajaran jika hanya mendengarkan penjelasan dari guru',1],
            [1,'V16','Saya mencatat setiap penjelasan guru agar tidak mudah lupa',1],
            [1,'A01','Saya lebih suka mendengar berita daripada membaca berita'],
            [1,'A02','Saya terbiasa berbicara sendiri saat belajar agar mudah memahami materi'],
            [1,'A03','Saya kesulitan membaca materi ketika teman teman ramai di kelas'],
            [1,'A04','Suara keributan mengganggu konsentrasi saya ketika mendengarkan penjelasan guru'],
            [1,'A05','Menjelang UTS matematika, saya belajar dengan cara membacanya keras-keras'],
            [1,'A06','Saya suka bernyanyi'],
            [1,'A07','Saya lebih mudah memahami penjelasan dari guru daripada membaca sendiri'],
            [1,'A08','Saya mengingat dengan baik pembicaraan teman dalam diskusi'],
            [1,'A09','Saya senang ngobrol dengan teman sebangku setelah selesai mengerjakan tugas'],
            [1,'A10','Saya lebih  senang bercerita daripada  harus menulis cerita'],
            [1,'A11','Saya mengantuk jika membaca buku dalam waktu lama'],
            [1,'A12','Saya kesulitan belajar jika mendengar suara musik yang terlalu keras'],
            [1,'A13','Menjelang UAS, orang tua saya membantu belajar dengan membacakan materi yang akan diujikan esok hari agar mudah diingat'],
            [1,'A14','Saya mengingat dengan mudah materi yang dijelaskan oleh guru'],
            [1,'A15','Saya  harus  membaca  berulang  kali  untuk menghapalkan materi yang sedang dipelajari'],
            [1,'A16','Saya kesulitan memahami materi jika hanya membaca tanpa mengucapkannya'],
            [1,'K01','Saya membaca materi dengan  pelan  supaya bisa memahaminya dengan baik'],
            [1,'K02','Saat diminta guru untuk menyampaikan pendapat, saya mengatakannya dengan pelan'],
            [1,'K03','Saya berlatih matematika dengan cara mengerjakan soal'],
            [1,'K04','Saya senang melakukan percobaan dalam belajar matematika'],
            [1,'K05','Menjelang UAS, saya biasanya belajar dengan cara menuliskan kembali materi yang baru dipelajari'],
            [1,'K06','Saya berjalan mondar-mandir saat berusaha menghapalkan rumus-rumus dalam matematika yang suli'],
            [1,'K07','Saya suka berjalan bolak-balik sambil menghapalkan rumus agar mudah dipahami'],
            [1,'K08','Saya menggunakan jari untuk menemukan kata-kata dalam bacaan'],
            [1,'K09','Saya menggunakan jari sebagai penunjuk ketika membaca'],
            [1,'K10','Saya meletakkan jari telunjuk di bibir untuk meminta agar teman-teman  tidak  ramai  di kelas'],
            [1,'K11','Saya menyentuh pundak teman ketika hendak mengajaknya berbicara'],
            [1,'K12','Saya merasa bosan jika hanya duduk diam terlalu lama di dalam kelas'],
            [1,'K13','Saya mengetuk-ketukkan pulpen ketika mendengarkan penjelasan dari guru'],
            [1,'K14','Saya lebih suka diberi tugas mengerjakan soal matematika daripada mendengarkan penjelasan rumus dari guru'],
            [1,'K15','Saya lebih suka bermain daripada menonton televisi'],
            [1,'K16','Saya lebih senang berolahraga daripada membaca buku'],
        ];
        foreach ($items as $key => $item) {
            FormItem::create([
                        'form_id' => $item[0],
                        'component' => 'item',
                        'component_order' => $item[1],
                        'name' => $item[2],
                        'max_score' => 1,
                    ]);
        }
    }
}



