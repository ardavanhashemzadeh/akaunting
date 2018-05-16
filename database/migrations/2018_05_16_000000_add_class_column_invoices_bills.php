<?php
use Illuminate\Database\Migrations\Migration;
class AddClassColumnInvoicesBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function ($table) {
            $table->integer('class_id');
        });
        Schema::table('bills', function ($table) {
            $table->integer('class_id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function ($table) {
            $table->dropColumn('class_id');
        });
        Schema::table('bills', function ($table) {
            $table->dropColumn('class_id');
        });
    }
}
