<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('features')->insert(
            [
                ['name' => 'Bootie upper construction hugs your foot for a snug, supportive fit'],
                ['name' => 'Blown rubber outsole at the forefoot provides superior rebound'],
                ['name' => 'Underfoot cushioning and flex zones informed by pressure mapping data'],
                ['name' => 'Bootie upper construction hugs your foot for a snug, supportive fit'],
                ['name' => 'A Hypo-knit upper is designed to provide strategic areas of stretch and support'],
                ['name' => 'Fresh Foam X midsole foam with approximately 3% bio-based content delivers our most cushioned Fresh Foam'],
                ['name' => 'Available in extended width sizes'],
                ['name' => 'Rubber outsole with 5% recycled rubber'],
                ['name' => 'Midsole foam uses approximately 3% bio-based content made from renewable sources to help reduce our carbon footprint'],
                ['name' => 'Rubber outsole with 5% recycled rubber'],
                ['name' => 'Midsole foam uses approximately 3% bio-based content made from renewable sources to help reduce our carbon footprint'],
                ['name' => 'ENCAP midsole cushioning combines soft foam with a durable polyurethane rim to deliver all-day support'],
                ['name' => 'Vamp, collar and tongue mesh are 100% recycled polyester'],
                ['name' => 'Suede / mesh upper'],
                ['name' => 'Welded forefoot water-guard for extra protection'],
                ['name' => 'Molded CUSH+® insole for superior comfort'],
                ['name' => 'Smart rubber spikeless outsole has pressure mapping colors to highlight key performance zones'],
                ['name' => 'Waterproof performance mesh / microfiber leather upper'],
                ['name' => 'Achilles pads for heel comfort'],
                ['name' => 'Fully knitted upper with Kinetic Stitch technology'],
                ['name' => 'Lace closure for a secure fit'],
                ['name' => 'Mesh upper offers a lightweight feel for enhanced breathability and air flow'],
                ['name' => 'Full rubber outsole delivers unmatched traction in outdoor environments'],
                ['name' => 'ROLLBAR stability post system helps control rear-foot movement for enhanced support'],
                ['name' => 'Hybrid tongue construction gives you the support of a mid-cut and look of a low-cut collar'],
                ['name' => 'OLD BAY colorway'],
                ['name' => 'TPU molded cleat outsole provides superior traction on both turf and natural surfaces'],
            ]
        );
    }
}
