public function up()
{
    Schema::create('ponentes', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->text('biografia')->nullable();
        $table->string('especialidad')->nullable();
        $table->timestamps();
    });
}
