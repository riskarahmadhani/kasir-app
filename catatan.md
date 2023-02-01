            $table->id();
            $table->foreignId('transaksi_id')->constrained('transaksis')->onDelete('cascade')->onUpdate('no action');
            $table->foreignId('menu_id')->constrained('menus')->onDelete('cascade')->onUpdate('no action');
            $table->integer('qty');
            $table->integer('harga');