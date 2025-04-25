public function creator()
{
    return $this->belongsTo(User::class, 'creator_id');
}