@props(['contacts'])

<ol>
    @foreach($contacts as $contact)
        <li>
            <a class="underline text-blue-500 flex items-center gap-2"
               href="/contacts/{{ $contact->id }}" >{{ $contact->firstname }} {{ $contact->lastname }}</a>
        </li>
    @endforeach
</ol>
