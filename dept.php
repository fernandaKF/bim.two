<?php

    class Departamento{
        private string $nomed;
        private int $numSala;

       

        public function getNumSala(): int
        {
                return $this->numSala;
        }

        public function setNumSala(int $numSala): self
        {
                $this->numSala = $numSala;

                return $this;
        }

        /**
         * Get the value of nomed
         */
        public function getNomed(): string
        {
                return $this->nomed;
        }

        /**
         * Set the value of nomed
         */
        public function setNomed(string $nomed): self
        {
                $this->nomed = $nomed;

                return $this;
        }
    }
