<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{


  protected $model = Invoice::class;

  public function definition()
  {

    $status = $this->faker->randomElement((['B', 'P', 'V'])); /* Billed, Paid , Void */

    return [
      'customer_id' => Customer::factory(),
      'amount' => $this->faker->numberBetween(100, 20000),
      'status' => $status,
      'billed_date' => $this->faker->dateTimeThisDecade(),
      'paid_date' => $status == 'p' ? $this->faker->dateTimeThisDecade() : null,
    ];
  }
}
