<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(ClubsTableSeeder::class);
      $this->call(UsersTableSeeder::class);
      // $this->call(TemporadasTableSeeder::class);
      // $this->call(NombreequiposTableSeeder::class);
      // $this->call(LigasTableSeeder::class);
      // $this->call(RivalsTableSeeder::class);
      // $this->call(JugadorsTableSeeder::class);
      // $this->call(EquiposTableSeeder::class);
      // $this->call(PartidosTableSeeder::class);
      // $this->call(EntrenosTableSeeder::class);
      // for ($i=0; $i < 10; $i++) {
      //      DB::table('equipo_jugador')->insert([
      //      'equipo_id'=> rand(1,5),
      //      'jugador_id'=> rand(1,29),
      //      'foto_jugador_equipo'=> '',
      //      'rol_jugador_equipo'=> 'a definir...',
      //      'edad_jugador_equipo'=> rand(19,31),
      //      'peso_jugador_equipo'=> rand(61,72),
      //      'altura_jugador_equipo'=> rand(169,189),
      //      'ficha_jugador_equipo'=> '',
      //      'club_procede_id'=> rand(1,5),
      // ]);
      // }
      //
      // for ($i=0; $i < 10; $i++) {
      //     DB::table('jugador_partido')->insert([
      //     'partido_id'=> rand(1,19),
      //     'equipojugador_id'=> rand(1,5),
      //     'condicion_jugador_partido'=> 'titular',
      //     'minutos_jugados_jugador_partido'=> rand(70,90),
      //     'goles_jugador_partido'=> rand(0,3),
      //     'asistencias_jugador_partido'=> rand(0,2),
      //     'tarjeta_amarilla_jugador_partido'=> rand(0,1),
      //     'tarjeta_roja_jugador_partido'=> rand(0,1),
      //     'analisis_jugador_partido'=> 'analisis a definir',
      //   ]);
      //   }
      //
      //   for ($i=0; $i < 20; $i++) {
      //      DB::table('entreno_jugador')->insert([
      //      'entreno_id'=> rand(1,5),
      //      'jugador_id'=> rand(1,5),
      //      'asistencia_entreno_jugador'=> 'asiste',
      //      'peso_entreno_jugador'=> rand(70,90),
      //      'incidencias_entreno_jugador'=> 'incidencias a definir',
      //    ]);
      //    }
    }
}
