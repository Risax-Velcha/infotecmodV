public function up()
{
    Schema::create('asistentes', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('email');
        $table->string('telefono');
        $table->unsignedBigInteger('evento_id');
        $table->timestamps();


        $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
    });
}
