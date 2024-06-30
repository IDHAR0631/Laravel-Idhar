use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');

        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){
            // insert data dummy pegawai dengan faker
            DB::table('pegawai')->insert([
                'pegawai_nama' => $faker->name,
                'pegawai_pekerjaan' => $faker->jobTitle,
                'pegawai_umur' => $faker->numberBetween(20, 50),
                'pegawai_alamat' => $faker->address,
            ]);
        }
    }
}
